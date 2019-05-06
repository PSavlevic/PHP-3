<?php

$panos = [
    [
        'vardas' => 'Monika',
        'grazi' => true,
        'protinga' => false,
    ],
    [
        'vardas' => 'Greta',
        'grazi' => true,
        'protinga' => true,
    ],
    [
        'vardas' => 'Egle',
        'grazi' => false,
        'protinga' => false,
    ],
    [
        'vardas' => 'Agne',
        'grazi' => false,
        'protinga' => true,
    ]
];

function grazios_protingos($merginos) {
    $grazios_protingos = [];

    foreach ($merginos as $mergina) {
        if ($mergina['grazi'] && $mergina['protinga']) {
            $grazios_protingos[] = $mergina;
        }
    }

    return $grazios_protingos;
}

$zmonos = grazios_protingos($panos);

var_dump($zmonos);

?>
