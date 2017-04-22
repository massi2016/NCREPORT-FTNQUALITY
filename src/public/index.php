<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

$app = new \Slim\App();

// Get container
$container = $app->getContainer();

// Register component on container
$container['view'] = function ($container) {
    $view = new \Slim\Views\Twig('../app/views/pages', [
        'cache' => false
    ]);

    // Instantiate and add Slim specific extension
    $basePath = rtrim(str_ireplace('index.php', '', $container['request']->getUri()->getBasePath()), '/');
    $view->addExtension(new Slim\Views\TwigExtension($container['router'], $basePath));

    return $view;
};


// Render Twig template in route
$app->get('/test/{name}', function ($request, $response, $args) {
    return $this->view->render($response, 'home.twig', [
        'name' => $args['name']
    ]);
});


$app->get('/hello/{name}', 'hello');


function hello(Request $request, Response $response){
    $name = $request->getAttribute('name');
    $response->getBody()->write("Hello, $name");

    return $response;
}



$app->run();