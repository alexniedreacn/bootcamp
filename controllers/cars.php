<?php
function carsAction() {
    $listOfCars = getRandomCar();

    $templateVariables = ['cars' => $listOfCars];
    $template = 'views/cars.view.php';

    return render($template, $templateVariables);
}