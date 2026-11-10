<?php

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
