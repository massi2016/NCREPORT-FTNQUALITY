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
$app->get('/test', function ($request, $response, $args) {
    //$name = $request->getAttribute('name');
    $conn = getConnection();
    $sql = "SELECT * FROM ncr";
    $result = $conn->query($sql);
    foreach($result as $row) {
        $results[] = $row;
    }
    return $this->view->render($response, 'home.twig', [
        'results' => $results
    ]);
});


$app->get('/hello', 'hello');
function hello(Request $request, Response $response){
    $conn = getConnection();
    $sql = "SELECT * FROM ncr";
    $result = $conn->query($sql);
    foreach($result as $row) {
        $results[] = $row;
    }
    return $this->view->render($response, 'home.twig', [
        'name' => $results
    ]);
}

/**
 * @return PDO database connection
 */
function getConnection() {
    $dbhost="ncrdevelpualyes";
    $dbuser="root";
    $dbpass="root";
    $dbname="ncrdevelpualyes";
    try {
        $dbh = new PDO('mysql:host=localhost;dbname=ncrdevelpualyes', $dbuser, $dbpass);

    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
    return $dbh;
}

function listNcrs() {
    $conn = getConnection();
    $sql = "SELECT * FROM ncr";
    $result = $conn->query($sql);
    foreach($result as $row) {
        $results[] = $row;
    }
    return $results;
}


$app->run();