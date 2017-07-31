<?php

namespace PHPBootcamp\Tests\Models;

use PHPBootcamp\Models\Animals;
use PHPBootcamp\Repositories\AnimalsRepository;
use PHPUnit\Framework\TestCase;

class AnimalsTest extends TestCase
{
    public function testGetListOfAnimals()
    {
        //Arrange
        $animalsRepo = $this->createPartialMock(AnimalsRepository::class, ['getListOfAnimals']);
        $expected = ['dog', 'sheep', 'llama'];

        $animalsRepo->expects($this->exactly(1))
            ->method('getListOfAnimals')
            ->willReturn(['medium' => $expected]);

        $animals = new Animals($animalsRepo);

        //Act
        $actual = $animals->getListOfAnimals();

        //Assert
        $this->assertSame($expected, $actual);
    }
}