<?php

namespace PHPBootcamp\Controllers;

class AnimalsController extends AbstractController
{
    const ANIMAL_SIZE_BIG = 1;
    const ANIMAL_SIZE_SMALL = 2;
    const ANIMAL_SIZE_MEDIUM = 3;

    protected $smallAnimals;
    protected $animals;

    public function animalsAction($color = null)
    {
        /** @var \Animals $animals */
        $animals = $this->container->get('model.animals');

        $listOfAnimals = $animals->getListOfAnimals();

        $templateVariables = ['color' => $color, 'animals' => $listOfAnimals];
        $template = 'animals.view.php';

        return $this->render($template, $templateVariables);
    }

    public function smallAnimalsAction()
    {
        /** @var \SmallAnimals $animals */
        $animals = $this->container->get('model.animals.small');

        $listOfAnimals = $animals->getListOfAnimals();

        $templateVariables = ['animals' => $listOfAnimals];
        $template = 'animals.view.php';

        return $this->render($template, $templateVariables);
    }
}