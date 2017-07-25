<?php
if (array_key_exists('page', $_GET)) {

    if ($_GET['page'] === 'animals') {
        $color = $_GET['color'] ?? null;

        $animals = include 'animal.php';
    }

    if ($_GET['page'] === 'cars') {
        $cars = include 'cars.php';
    }


    include 'view.php';
}