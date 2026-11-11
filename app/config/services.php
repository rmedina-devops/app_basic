<?php

use Dice\Dice;
use eftec\bladeone\BladeOne;
use flight\Engine;

$app = Flight::app();

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__,2));
$dotenv->load();

$viewsPath = __DIR__ . '/../Views';
$cachePath = __DIR__ . '/../../cache';

$mode = getenv('APP_ENV') === 'production' ? BladeOne::MODE_FAST : BladeOne::MODE_AUTO;
$app->register('view', BladeOne::class, [$viewsPath, $cachePath, $mode]);
$app->map('render', function($template, $data = []) use ($app){
    return $app->view->run($template, $data);
});

$container = new Dice();
$container = $container->addRule('*', [
    'substitutions' => [
        Engine::class => $app,
    ]
]);

$app->registerContainerHandler(function ($class, $params) use ($container) {
    return $container->create($class, $params);
});

$app->map('make', function ($class, $params = []) use ($container) {
    return $container->create($class, $params);
});