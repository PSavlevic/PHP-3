<?php

$bendra_atmintis = [];

$mano_atmintis = [
    'Penktadienis',
    'Paskaita',
    'Baras',
    'Viskis',
    'Alus',
    'Alus',
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

foreach ($mano_atmintis as $prisiminimas) {
    $egzistuoja = in_array($prisiminimas, $draugo_atmintis);
    $duplikuojasi = in_array($prisiminimas, $bendra_atmintis);
    if ($egzistuoja && !$duplikuojasi) {
        $bendra_atmintis[] = $prisiminimas;
    }
}



foreach ($mano_atmintis as $prisiminimas) {
    $egzistuoja = in_array($prisiminimas, $draugo_atmintis);
    $duplikuojasi = in_array($prisiminimas,$bendra_atmintis);
    if ($egzistuoja && !$duplikuojasi) {
        $bendra_atmintis[] = $prisiminimas;
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