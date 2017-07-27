<?php

class Cars
{
    private $arrayOfCars = [];

    public function __construct(array $arrayOfCars)
    {
        $this->arrayOfCars = $arrayOfCars;
    }

    /**
     * Returns a list of cars
     *
     * @return array
     */
    public function getRandomCars() : array
    {
        $this->shuffle();
        return $this->arrayOfCars;
    }

    private function shuffle()
    {
        shuffle($this->arrayOfCars);
    }

    public function getListOfAnimals()
    {
        return [];
    }
}