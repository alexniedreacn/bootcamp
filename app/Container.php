<?php

namespace PHPBootcamp;

use Symfony\Component\DependencyInjection\ContainerBuilder;

class Container implements ContainerInterface
{
    protected $container;

    public function __construct(ContainerBuilder $container)
    {
        $this->container = $container;
    }

    public function get(string $dependencyName)
    {
        return $this->container->get($dependencyName);
    }

    public function getParameter(string $paramName)
    {
        return $this->container->getParameter($paramName);
    }
}