<?php

namespace PHPBootcamp\Controllers;

interface ControllerInterface
{
    public function render(string $template, array $content = []) : string;
}