<?php

$rasinys =
$zodziai = [
    'lauke', 'ryte', 'prie', 'Maxima', 'masina',
];

$rasinio_ilgis = rand(100, 300);

for ($katiusa=0; $katiusa < $rasinio_ilgis; $katiusa++) {
    $random_index = rand(0, count($zodziai)-1);
    $random_zodis = $zodziai[$random_index];
    $rasinys[] = $random_zodis;
}

var_dump($rasinys);

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Ataskaita</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
    </body>
</html>