<?php

include_once 'AnimalModelInterface.php';

class Animals implements AnimalModelInterface
{
    /**
     * Returns a list of animals
     *
     * @return array
     */

    public function getListOfAnimals() : array
    {
        return [
            'rabbit',
            'bear',
            'rat',
            'mouse',
            'cat',
            'dog',
            'moose',
            'elephant',
            'giraffe'
        ];
    }
}