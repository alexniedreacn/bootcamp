<?php

include_once 'models/animals.php';

function animalsAction()
{
    $color = $_GET['color'] ?? NULL;

    $animals = new Animals();
    $listOfAnimals = $animals->getListOfAnimals();

    $templateVariables = ['color' => $color, 'animals' => $listOfAnimals];
    $template = 'views/animals.view.php';

    return render($template, $templateVariables);
}

function smallAnimalsAction()
{
    return 'this is small animals action';
}