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
    'Paskaita',
];

var_dump($mano_atmintis)
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Array</title>
</head>
<body>
    <h1>Kas buvo penktadieni?</h1>
    <h2>Mano atmintis</h2>
    <p>
        <ul>
            <?php foreach ($mano_atmintis as $value): ?>
            <li>
                <?php print $value;?>
            </li>
            <?php endforeach; ?>
        </ul>
    </p>
</body>
</html>