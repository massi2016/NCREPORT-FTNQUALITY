<?php


    require '../vendor/autoload.php';
    require 'testController.php';
    
    $app = new \Slim\App();


$app->get('/test',  'TestController:selectAllFromSite');

$app->run();