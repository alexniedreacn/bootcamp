<?php

include_once 'animal.php';

if (array_key_exists('page', $_GET)) {

    if ($_GET['page'] === 'animals') {
        $color = $_GET['color'] ?? null;
        $listOfAnimals = getListOfAnimals();

        $content = render(
            'views/animals.view.php',
            [
                'animals' => $listOfAnimals
            ]
        );
    }

    if ($_GET['page'] === 'cars') {
        $content = include 'views/cars.view.php';
    }

    include 'view.php';
}

function render(string $template, array $contents)
{
    return include $template;
}