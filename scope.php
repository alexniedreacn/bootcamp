<?php

$x = 5;
$y = 3;

$c = $x + $y; //5

if ($x > 2) {
    //Still Global scope
}

if ($x < 2) {

} else {
    calculate($x, $y);
}

function calculate(int $x, int $y)
{

}