<?php

include_once 'models/cars.php';
include_once 'AbstractController.php';

class CarsController extends AbstractController
{
    public function carsAction()
    {
        /** @var \Cars $cars */
        $cars = $this->container->get('model.cars');
        $listOfCars = $cars->getRandomCars();

        $templateVariables = ['cars' => $listOfCars];
        $template = 'views/cars.view.php';

        return $this->render($template, $templateVariables);
    }
}