<?php

require_once __DIR__ . '/../../vendor/autoload.php';

$app = Flight::app();

require_once __DIR__ . '/services.php';

$router = $app->router();

require_once __DIR__ . '/routes.php';

return $app;