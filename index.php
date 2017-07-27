<?php

include_once 'controllers/AnimalsController.php';
include_once 'controllers/CarsController.php';

$response = ''; //render('views/landing.view.php');
if (array_key_exists('page', $_GET)) {
    $requestedPage = $_GET['page'];

    $animals = new Animals();
    $smallAnimals = new SmallAnimals();

    $carsModel = new Cars([]);

    $animals = new AnimalsController($animals);
    $smallAnimals = new AnimalsController($smallAnimals);

    $cars = new CarsController();

    $pages = [
        'animals' => [$animals, 'animalsAction'],
        'small-animals' => [$smallAnimals, 'smallAnimalsAction'],
        'cars' => [$cars, 'carsAction'],
    ];

    if (array_key_exists($requestedPage, $pages)) {
        $response = call_user_func($pages[$requestedPage]);
    } else {
        //http_response_code(404);
        header('HTTP/1.1 404 Not Found');
    }
}

include 'view.php';