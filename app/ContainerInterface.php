<?php

namespace PHPBootcamp;

interface ContainerInterface
{
    public function get(string $dependencyName);
}