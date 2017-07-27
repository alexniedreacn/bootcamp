<?php

class Cars
{
    public function __construct()
    {
        $this->arrayOfCars = [
            'Toyota',
            'Nissan',
            'Tesla',
            'Opel',
            'Bla-mobile',
            'Running Turtle',
            'Smelly Sh*t',
            'Smokey',
            'GAZ',
            'VAZ',
            'MAZ',
            'LAZ',
            'Katyusha BM-30 Smerch',
            'Katyusha BM-21 Grad'
        ];
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
}