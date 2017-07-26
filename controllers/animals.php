<?php

function animalsAction() {
    $color = $_GET['color'] ?? null;
    $listOfAnimals = getListOfAnimals();

    $templateVariables = ['color' => $color, 'animals' => $listOfAnimals];
    $template = 'views/animals.view.php';

    return render($template, $templateVariables);
}