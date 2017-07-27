<?php

namespace PHPBootcamp\Controllers;

class CarsController extends AbstractController
{
    public function carsAction()
    {
        /** @var \Cars $cars */
        $cars = $this->container->get('model.cars');
        $listOfCars = $cars->getRandomCars();

        $templateVariables = ['cars' => $listOfCars];
        $template = 'cars.view.php';

        return $this->render($template, $templateVariables);
    }
}