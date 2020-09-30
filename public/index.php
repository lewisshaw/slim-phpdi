<?php

use App\Controller\IndexController;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

$containerBuilder = new DI\ContainerBuilder();

$containerBuilder->addDefinitions(__DIR__ . '/../config/dependencies.php');
// Can use multiple definition files, or just define them here

$container = $containerBuilder->build();
AppFactory::setContainer($container);
$app = AppFactory::create();

$app->get('/', IndexController::class);

$app->run();
