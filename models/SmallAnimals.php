<?php

include_once 'AnimalModelInterface.php';

class SmallAnimals implements AnimalModelInterface
{
    public function getListOfAnimals() : array
    {
        return [
            'mouse',
            'cat',
            'shitty-dog',
            'bird'
        ];
    }
}