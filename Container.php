<?php

class Container implements ContainerInterface
{
    protected $container;

    public function __construct(array $container)
    {
        $this->container = $container;
    }

    public function get(string $dependencyName)
    {
        return $this->container[$dependencyName];
    }

    public function getAnimalsModel()
    {
        return $this->container['model.animals'];
    }
}