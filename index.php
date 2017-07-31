<?php

require 'vendor/autoload.php';

use PHPBootcamp\Application;

$app = new Application();
$response = $app->handle($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);

echo $response;