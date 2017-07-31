<?php

namespace PHPBootcamp\Repositories;

use PHPBootcamp\Controllers\AnimalsController;

class AnimalsRepository extends Repository
{
    public function getListOfAnimals($size = AnimalsController::ANIMAL_SIZE_MEDIUM)
    {
        $sizeMap = [
            AnimalsController::ANIMAL_SIZE_SMALL  => 'small',
            AnimalsController::ANIMAL_SIZE_MEDIUM => 'medium',
            AnimalsController::ANIMAL_SIZE_BIG    => 'big',
        ];
        $animalSize = $sizeMap[$size];

        $animals = $this->db->select('animals', '*');

        return array_filter($animals, function ($animal) use ($animalSize) {
            return $animal['size'] === $animalSize;
        });
    }
}
