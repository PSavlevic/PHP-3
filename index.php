<?php

$daiktai = [
    [
        'name' => 'Kremas',
        'size' => '5',
        'color' => 'tamsus'
    ],
    [
        'name' => 'Riešutai',
        'size' => '10',
        'color' => 'tamsus'
    ],
    [
        'name' => 'Lupdažis',
        'size' => '2',
        'color' => 'šviesus'
    ],
    [
        'name' => 'Kojinės',
        'size' => '12',
        'color' => 'tamsus'
    ]
];

//random masyvas
$random_name = $daiktai[rand(0, count($daiktai) - 1)];

//randomina name su atsitiktiniu skaiciumi
$name = $random_name['name'];

//randomina size su atsitiktiniu skaiciumi (tuo paciu kaip $name)
$size = $random_name['size'];

//randomina tamsus/sviesus su atsitiktiniu skaiciumi (tuo paciu kaip $name)
$color = $random_name['color'];

?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<p>
    <?php print $name?> užima <?php print $size?> cm3. Daiktas <?php print $color ?>.
</p>
</body>
</html>