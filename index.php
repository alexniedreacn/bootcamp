<?php

include_once 'models/animals.php';
include_once 'models/cars.php';
include_once 'controllers/animals.php';
include_once 'controllers/cars.php';

$response = null;
if (array_key_exists('page', $_GET)) {
//    $pages = ['animals', 'cars', 'fruits'];

    if ($_GET['page'] === 'animals') {
        $response = animalsAction();
    }

    if ($_GET['page'] === 'cars') {
        $response = carsAction();
    }
}

if ($response == null) {
    $response = 'Please select a page';
}

include 'view.php';

function render(string $template, array $content) : string
{
    return include $template;
}