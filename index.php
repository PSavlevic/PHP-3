<?php

$gerimai = [

    [
        'name' => 'Vilkmerges Alus',
        'kaina' => 4.50,
        'nuolaida' => 0
    ],
    [
        'name' => 'Stumbro Degtine',
        'kaina' => 8.50,
        'nuolaida' => 10
    ],
    [
        'name' => 'Riesling vynas',
        'kaina' => 11.50,
        'nuolaida' => 15
    ],
    [
        'name' => 'Cider sidras',
        'kaina' => 3.50,
        'nuolaida' => 25
    ],
];

foreach ($gerimai as $index => $gerimas) {
    if($gerimas['nuolaida'] > 0) {
        $css_class = 'su_akcija';
       $gerimai[$index]['kaina'] *= (100 - $gerimas['nuolaida']) / 100;
    } else {
        $css_class = 'be_akcijos';
    }
    $gerimai[$index]['css_class'] = $css_class;
}
//var_dump($gerimai);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Ataskaita</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>

        .su_akcija {
            font-size: larger;
        }

        .be_akcijos {
            font-size: smaller;
        }
    </style>
</head>
<body>
    <ul>
        <?php foreach ($gerimai as $gerimas): ?>
        <li class="<?php print $gerimas['css_class']; ?>">
            <span><?php print $gerimas['name']; ?></span>
            <span><?php print $gerimas['kaina']; ?></span>
        </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>