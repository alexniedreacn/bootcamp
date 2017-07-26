<?php
$output = '<ul>';
foreach ($contents['animals'] as $animal) {
    $output .= '<li>' . $animal . '</li>';
}
$output .= '</ul>';

return $output;