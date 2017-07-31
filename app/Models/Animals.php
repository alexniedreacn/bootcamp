<?php

namespace PHPBootcamp\Models;

use PHPBootcamp\Repositories\AnimalsRepository;

class Animals implements AnimalModelInterface
{
    private $animalsRepository;

    public function __construct(AnimalsRepository $animalsRepository)
    {
        $this->animalsRepository = $animalsRepository;
    }

    /**
     * Returns a list of animals
     *
     * @return array
     */
    public function getListOfAnimals() : array
    {
        return $this->animalsRepository->getListOfAnimals();
    }
}