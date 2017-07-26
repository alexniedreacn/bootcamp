<?php

include_once 'controllers/animals.php';
include_once 'controllers/cars.php';

function render(string $template, array $content = []) : string
{
    return include $template;
}

$response = render('views/landing.view.php');
if (array_key_exists('page', $_GET)) {
    $requestedPage = $_GET['page'];

    $pages = [
        'animals' => 'animalsAction',
        'small-animals' => 'smallAnimalsAction',
        'cars' => 'carsAction',
    ];

    if (array_key_exists($requestedPage, $pages)) {
        $response = $pages[$requestedPage]();
    } else {
        //http_response_code(404);
        header('HTTP/1.1 404 Not Found');
    }
}

include 'view.php';