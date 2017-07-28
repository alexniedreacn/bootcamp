<?php

require 'vendor/autoload.php';

use PHPBootcamp\Container;
use PHPBootcamp\Controllers\AnimalsController;
use PHPBootcamp\Controllers\CarsController;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

$response = ''; //render('views/landing.view.php');

if (array_key_exists('page', $_GET)) {
    $requestedPage = $_GET['page'];

    $containerBuilder = new ContainerBuilder();
    $containerBuilder->setParameter('resource.views', __DIR__ . '/app/views/');
    $containerBuilder->register('repository.animals', '\PHPBootcamp\Repositories\AnimalsRepository');
    $containerBuilder->register('model.animals.small', '\PHPBootcamp\Models\SmallAnimals');
    $containerBuilder->register('model.cars', '\PHPBootcamp\Models\Cars');
    $containerBuilder->register('model.animals', '\PHPBootcamp\Models\Animals')
        ->addArgument(new Reference('repository.animals'));

    $container = new Container($containerBuilder);

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

include __DIR__ . '/app/view.php';