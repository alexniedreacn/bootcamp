<?php
$output = '<ul>';
foreach ($content['animals'] as $animal) {
    $output .= "<li>A {$content['color']} $animal</li>";
}
$output .= '</ul>';

return $output;