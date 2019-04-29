<?php

$ataskaita = [
    [
        'name' => 'IKI Darbo Uzmokestis',
        'amount' => '600',
    ],
    [
        'name' => 'Kalvariju Nacnykas',
        'amount' => '-15',
    ],
    [
        'name' => 'Limonas',
        'amount' => '-120',
    ],
    [
        'name' => 'Vovkos garazas',
        'amount' => '-340',
    ],
];

$visos_islaidos = 0;
$visos_iplaukos = 0;
$balansas = 0;

foreach ($ataskaita as $index => $irasas) {
    if ($irasas['amount'] > 0) {
        $css_class = 'positive';
        $visos_iplaukos += $irasas['amount'];
    } else {
        $css_class = 'negative';
        $visos_islaidos -= $irasas['amount'];
    }

    $ataskaita[$index]['css_class'] = $css_class;
    $balansas += $irasas['amount'];
}

$text = "Balansas yra lygu $balansas, Visos islaidos $visos_islaidos ,o iplaukos yra lygu $visos_iplaukos."

?>
<!DOCTYPE html>
<html>
<head>
    <title>Ataskaita</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        .positive {
            color: green;
        }
        .negative {
            color: red;
        }
    </style>
</head>
<body>
    <ul>
        <?php foreach ($ataskaita as $irasas): ?>
            <li class="<?php print $irasas['css_class']; ?>">
                <span><?php print $irasas['name']; ?></span>
                <span><?php print $irasas['amount']; ?></span>
            </li>
        <?php endforeach; ?>
    </ul>
    <p>
        <?php print $text; ?>
    </p>
</body>
</html>