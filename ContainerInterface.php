<?php

interface ContainerInterface
{
    public function get(string $dependencyName);
}