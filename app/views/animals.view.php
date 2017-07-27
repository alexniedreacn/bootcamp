<?php
$color = $content['color'] ?? null;

$output = '<ul>';
foreach ($content['animals'] as $animal) {
    $output .= "<li>A $color $animal</li>";
}
$output .= '</ul>';

return $output;