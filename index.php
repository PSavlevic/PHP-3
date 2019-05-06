<?php

function duok($arrayKey, $colorKey){

    $array = [
        'labas',
        'krabas',
        'matas',
    ];

    $color = [
        'melyna',
        'raudona',
        'ruda',
    ];

    foreach ($array as $key => $value){
        $tekstas =  $array[$arrayKey];
    }

    foreach ($color as $key => $value){
        $spalva =  $color[$colorKey];
    }
    return $tekstas . ' ' . $spalva;
}

print duok(2,1);

?>