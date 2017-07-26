<?php
function getRandomCar()
{
    $arrayOfCars = [
        'Toyota',
        'Ford',
        'Audi',
        'Nissan',
        'Mercedes',
        'Opel',
        'Battery-on-wheels',
        'Cardboard-box',
        'Bathtub',
        'Bat-mobile'
    ];

    return $arrayOfCars[random_int(0, count($arrayOfCars) - 1)];
}