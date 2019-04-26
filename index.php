<?php

$mano_atmintis = [
    'Penktadienis',
    'Paskaita',
    'Baras',
    'Viskis',
    'Alus',
    'Degtine',
    'Alus',
    'Pirmadienis',
    'Paskaita'
];

$draugo_atmintis = [
    'Penktadienis',
    'Paskaita',
    'Kavine',
    'Sidras',
    'Brendis',
    'Mohito',
    'Stripbaras',
    'Pirmadienis',
    'Paskaita',

];

$rand_flashback = rand(0, count($mano_atmintis) - 1);
$rand_flashback = rand(0, count($draugo_atmintis) - 1);
$text1 = "#$rand_flashback $mano_atmintis[$rand_flashback]";
$text2 = "#$rand_flashback $draugo_atmintis[$rand_flashback]";

?>
<!DOCTYPE html>
<html>
<head>
    <title>Klases daras</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Kas buvo penktadienį ?!</h1>
    <h2>Mano atmintis</h2>
    <ul> <!-- foreach -->
        <?php foreach ($mano_atmintis as $value): ?>
            <li>
                <?php print $value; ?>
            </li>
        <?php endforeach; ?>
    </ul><!-- endforeach -->
    <?php
    print $text1;
    ?>
    <h2>Draugo atmintis</h2>
    <ul> <!-- foreach -->
        <?php foreach ($draugo_atmintis as $value_draugo): ?>
            <li>
                <?php print $value_draugo; ?>
            </li>
        <?php endforeach; ?>
    </ul><!-- endforeach -->
    <?php
    print $text2;
    ?>
</body>
</html>