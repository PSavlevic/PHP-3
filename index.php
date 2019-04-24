<?php
$pakelio_kaina = 3.75;
$surukyta = 0;
$surukyta2 = 0;
$viso_min = 0;
$rukymo_laikas = 5; // 5 uzduotis

for ($day = 1; $day <= 365; $day++) {
    $weekday = date('N', strtotime("+$day days"));
    if ($weekday <= 4) {
        $cizos_mon_thu = rand(3, 4); // Nuo pirmadienio iki ketvirtadienio
        $surukyta += $cizos_mon_thu; // Kiek surūkiau iki ketvirtadienio
        $surukyta2 += $cizos_mon_thu; // Kiek surūkiau iki ketvirtadien
    } elseif ($weekday == 5) {
        $cizos_fri = rand(10, 20); // Penktadienis
        $surukyta += $cizos_fri; // Kiek surukiau per penktadieni
    } else {
        $cizos_sat_sun = rand(1, 3); // Sestadienis-sek
        $surukyta += $cizos_sat_sun; // Kiek surukiau per sest-sek
    }
    $viso_min = $surukyta * $rukymo_laikas; // 5 uzduotis
}
$viso_hours = round($viso_min / 60);   // 5 uzduotis

$kainuos = round($surukyta / 20 * 3.75);
$text = "Per metus surukysiu $surukyta cigareciu uz $kainuos eur.";
$kainuos2 = round($surukyta2 / 20 * 3.75);
$text2 = "Nerukydamas pirmadieni-ketvirtaideni sutaupyciau $kainuos2 eur.";
$text3 = "Per metus prastovesiu $viso_hours valandu traukdamas"; // 5 uzduotis

?>
<html>
<head>
    <title>main</title>
    <style>
        img {
            width: 30px;
            height: 30px;
        }
    </style>
</head>
<body>
<p>
    <?php print $text . ' ' . $text2 . '<br> ' . $text3 . '<br><br>';?>
</p>

<div class="container">
    <?php for ($n = 0; $n < $surukyta; $n++):?>
        <img src="https://image.flaticon.com/icons/svg/1673/1673015.svg" alt="cig">
    <?php endfor; ?>
</div>

</body>
</html>