<?php

$merginos = [
    [
        'vardas' => 'Monika',
        'grazi' => true,
        'protinga' => false,
    ],
    [
        'vardas' => 'Kotryna',
        'grazi' => true,
        'protinga' => true,
    ],
    [
        'vardas' => 'Migle',
        'grazi' => true,
        'protinga' => false,
    ],
    [
        'vardas' => 'Laura',
        'grazi' => true,
        'protinga' => true,
    ],
];

function vardai ($names){
    $random_index = rand(0, count($names) - 1);
    return $names[$random_index]['vardas'];
}

$random_mergina = vardai($merginos);

?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Hey Hey</title>
</head>
<body>
<p>
    <?php print $random_mergina; ?>
</p>
</body>
</html>