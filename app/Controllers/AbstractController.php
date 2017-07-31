<?php

namespace PHPBootcamp\Controllers;

use PHPBootcamp\ContainerInterface;

abstract class AbstractController implements ControllerInterface
{
    /** @var ContainerInterface */
    protected $container;

    /** @var \Twig_Environment */
    protected $twig;

    public function __construct(ContainerInterface $dependencyContainer)
    {
        $this->container = $dependencyContainer;
        $this->twig = $dependencyContainer->get('twig.env');
    }

    public function render(string $template, array $content = []) : string
    {
        return $this->twig->render($template, $content);
    }
}