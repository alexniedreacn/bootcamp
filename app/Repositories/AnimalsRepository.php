<?php

namespace PHPBootcamp\Repositories;

class AnimalsRepository
{
    public function connectToDb()
    {
        //
    }

    public function getListOfAnimals()
    {
        //Query database
        //Fetch list
        return [
            'small' => [
                'rabbit',
                'rat',
                'cat',
                'mouse'
            ],
            'medium' => [
                'dog',
                'goat',
                'sheep',
                'llama'
            ],
            'large' => [
                'moose',
                'elephant',
                'giraffe',
                'rhino',
                'your mom'
            ]
        ];
    }
}
