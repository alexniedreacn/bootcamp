<?php

namespace PHPBootcamp;

interface ContainerInterface
{
    public function get(string $dependencyName);

    public function getParameter(string $paramName);
}