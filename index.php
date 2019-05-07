<?php

$catalog = [
    [
        'name' => 'Kepure',
        'price' => 15,
        'content' => 'Pavasarine kepure',
        'discount' => 5,
    ],
    [
        'name' => 'Dzinsai',
        'price' => 45,
        'content' => 'Melyni dzinsai',
        'discount' => 15,
    ],
    [
        'name' => 'Striuke',
        'price' => 60,
        'content' => 'Juoda striuke',
        'discount' => 20,
    ],
    [
        'name' => 'Sortai',
        'price' => 35,
        'content' => 'Melyni sortai',
        'discount' => 10,
    ],
    [
        'name' => 'Pirstines',
        'price' => 22,
        'content' => 'Medziagines pirstines',
        'discount' => 35,
    ],
];

foreach ($catalog as $index => $value) {
$catalog[$index]['kaina_su_nuolaida'] = $value['price'] * (100 - $value['discount']) / 100;
}

var_dump($catalog);

?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Hey Hey</title>
    <style>
        .produktas {
            display: flex;
            height: 50px;
            font-weight: bold;
        }

        .pavadinimas, .kaina, .aprasymas, .nuolaida, .su_nuolaida {
            border: 1px solid black;
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
<div class="produktas">
    <span class="pavadinimas"> Pavadinimas
    </span>
    <span class="kaina"> Kaina
    </span>
    <span class="aprasymas"> Aprasymas
    </span>
    <span class="nuolaida"> Nuolaida
    </span>
    <span class="Kaina su nuolaida"> Kaina su nuolaida
    </span>
</div>
<?php foreach ($catalog as $product): ?>
<div class="produktas">
    <span class="pavadinimas">
        <?php print $product['name']; ?>
    </span>
    <span class="kaina">
        <?php print $product['price'] . ' Eur'; ?>
    </span>
    <span class="aprasymas">
        <?php print $product['content']; ?>
    </span>
    <span class="nuolaida">
        <?php print $product['discount'] . ' %'; ?>
    </span>
    <span class="su_nuolaida">
  <?php print $product['kaina_su_nuolaida'] . ' Eur';  ?>
    </span>
</div>
<?php endforeach; ?>
</body>
</html>