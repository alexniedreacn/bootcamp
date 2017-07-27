<?php

include_once 'models/cars.php';

function carsAction() {

    $arrayOfCars = [
        'Toyota',
        'Nissan',
        'Tesla',
        'Opel',
        'Bla-mobile',
        'Running Turtle',
        'Smelly Sh*t',
        'Smokey',
        'GAZ',
        'VAZ',
        'MAZ',
        'LAZ',
        'Katyusha BM-30 Smerch',
        'Katyusha BM-21 Grad'
    ];

    $cars = new Cars($arrayOfCars);
    $listOfCars = $cars->getRandomCars();

    $templateVariables = ['cars' => $listOfCars];
    $template = 'views/cars.view.php';

    return render($template, $templateVariables);
}