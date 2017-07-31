<?php

namespace PHPBootcamp\Models;

use PHPBootcamp\Controllers\AnimalsController;
use PHPBootcamp\Repositories\AnimalsRepository;

class SmallAnimals implements AnimalModelInterface
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
        return $this->animalsRepository->getListOfAnimals(AnimalsController::ANIMAL_SIZE_SMALL);
    }
}