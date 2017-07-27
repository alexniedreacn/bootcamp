<?php

include_once 'models/Animals.php';
include_once 'models/SmallAnimals.php';
include_once 'AbstractController.php';

class AnimalsController extends AbstractController
{
    const ANIMAL_SIZE_BIG = 1;
    const ANIMAL_SIZE_SMALL = 2;
    const ANIMAL_SIZE_MEDIUM = 3;

    protected $smallAnimals;
    protected $animals;

    public function __construct(AnimalModelInterface $animalModel)
    {
        $this->animals = $animalModel;
    }

    public function animalsAction()
    {
        $color = $_GET['color'] ?? null;

        $listOfAnimals = $this->animals->getListOfAnimals();

        $templateVariables = ['color' => $color, 'animals' => $listOfAnimals];
        $template = 'views/animals.view.php';

        return $this->render($template, $templateVariables);
    }

    public function smallAnimalsAction()
    {
        $listOfAnimals = $this->animals->getListOfAnimals();

        $templateVariables = ['animals' => $listOfAnimals];
        $template = 'views/animals.view.php';

        return $this->render($template, $templateVariables);
    }
}