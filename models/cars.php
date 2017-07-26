<?php
function getRandomCar() {
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

    shuffle($arrayOfCars);

    return $arrayOfCars;
}