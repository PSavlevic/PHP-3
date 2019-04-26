<?php

$bendra_atmintis = [];

$mano_atmintis = [
    'Penktadienis',
    'Paskaita',
    'Baras',
    'Viskis',
    'Alus',
    'Degtine',
    'Alus',
    'Cigarete',
    'Pirmadienis',

];

$draugo_atmintis = [
    'Penktadienis',
    'Paskaita',
    'Alus',
    'Dar vienas alutis',
    'Tualetas',
    'Cigarete',
    'Alutis',
    'Sokiai',
    'Paskaita'
];


foreach ($mano_atmintis as $value) {
    $egzistuoja = in_array($value, $draugo_atmintis);
    if ($egzistuoja) {
        $bendra_atmintis[] = $value;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Klases darbas, 5-tadienis</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php foreach ($bendra_atmintis as $value): ?>
            <li>
                <?php print $value ?>
            </li>
    <?php endforeach; ?>
</body>
</html>