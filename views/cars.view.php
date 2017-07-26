<?php
$output = '';
foreach ($content['cars'] as $car) {
    $output .= "$car<br>";
}

return $output;