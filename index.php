<?php

$sheep = ['miau'];

for ($x = 0; $x < 5; $x++){
    $sheep[] = &$sheep[$x];
}

foreach ($sheep as $key => $value) {
    unset($sheep[$key]);
    $sheep[$key] = $value;
}

$sheep[2] = 'au au au';

var_dump($sheep);