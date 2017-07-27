<?php

class Animals
{
    /**
     * Returns a list of animals
     *
     * @return array
     */
    public function getListOfAnimals() : array
    {
        $listOfAnimals = [
            'rabbit',
            'bear',
            'rat',
            'dog',
            'cat',
            'mouse'
        ];

        return $listOfAnimals;
    }
}