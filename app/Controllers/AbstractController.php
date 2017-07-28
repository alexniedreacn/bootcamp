<?php

namespace PHPBootcamp\Controllers;

use PHPBootcamp\ContainerInterface;

abstract class AbstractController implements ControllerInterface
{
    /** @var ContainerInterface */
    protected $container;

    public function __construct(ContainerInterface $dependencyContainer)
    {
        $this->container = $dependencyContainer;
    }

    public function render(string $template, array $content = []) : string
    {
        return include $this->container->getParameter('resource.views') . $template;
    }
}