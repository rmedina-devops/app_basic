<?php

use App\Controller\AuthController;

/**
 * This init project 
 */
$router->get("/", function(){
    echo Flight::view()->run('welcome', [
        'title' => getenv('APP_NAME') ?: 'Template',
        'year'  => date('yyyy'),
        'author'=> getenv('AUTHOR') ?: ' Demo'
    ]);
});
$router->get('/login',[AuthController::class, 'login']);
$router->post('/validate',[AuthController::class,'validate']);