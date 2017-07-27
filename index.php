<?php

include_once 'controllers/AnimalsController.php';
include_once 'controllers/CarsController.php';
include_once 'Container.php';

class Database
{

}

$response = ''; //render('views/landing.view.php');
if (array_key_exists('page', $_GET)) {
    $requestedPage = $_GET['page'];

    $dependencies = [
        'model.animals' => new Animals(),
        'model.animals.small' => new SmallAnimals(),
        'model.cars' => new Cars()
    ];

    $container = new Container($dependencies);

    $animals = new AnimalsController($container);
    $cars = new CarsController($container);

    $pages = [
        'animals' => [$animals, 'animalsAction'],
        'small-animals' => [$animals, 'smallAnimalsAction'],
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