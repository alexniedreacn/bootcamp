<?php

include_once 'ControllerInterface.php';

abstract class AbstractController implements ControllerInterface
{
    public function render(string $template, array $content = []) : string
    {
        return include $template;
    }
}