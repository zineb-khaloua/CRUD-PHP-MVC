<?php
// bootstrap.php
require_once __DIR__ . '/vendor/autoload.php';  // Charger Composer, si utilisé

use App\Connectors\DB;
use App\Connectors\App;
use App\Connectors\Container;
use App\Controllers\HomeController;
use App\Controllers\StagiaireController;

// Create and initialize the service container
$container = new Container();

// Bind DB singleton

$container->bind('DB',function(){
    return DB::getInstance()->getConnection();
});

//bind cotrollers
$container->bind('HomeController',function($container){

    return new HomeController($container->resolve('DB'));
});

$container->bind('StagiaireController',function($container){

    return new StagiaireController($container->resolve('DB'));
});

// Configure the container for global use
App::setContainer($container);

