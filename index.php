<?php
$random = rand(1, 4);
$css_class = 'pzda-level-' . $random;
//Galimu nutikimu array
$stories = [
    [
        'Aplijo',
        'Atsiriso batas',
        'Pameciau saldaini',
        'Nusiciaudejau garsiai',
        'Prisnigo',
    ],
    [
        'Parkritau',
        'Susitrenkiau ranka',
        'Nepaejo kodas',
        'Apsiko balandis',
        'Prigere draugelis',
    ],
    [
        'Nepamenu kas vakar buvo',
        'Sukaliau kartinga',
        'Reikia eiti i Dainu dainele',
        'Reikia eiti i teatra',
        'Chujova nuotaika',
    ],
    [
        'Paliko pana',
        'Sudauziau masina',
        'Apsisikau paskaitoj',
        'Pamirsau visa PHP',
        'Susimusiau naktiniam bare ir dabar ligoninej',
    ]
];
//Sukuriamas naujas array, i kuri patenka sakiniai po ciklo
$atrinktieji = [];
for ($x = 0; $x < $random; $x++) {
    $atrinktieji[] = $stories[$x][rand(0, count($stories[$x]) - 1)];
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>termometras</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
        .pzdamat {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
        }
        .pzdamat div {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .pzdamat div span {
            display: none;
        }
        .lygis-0 {
            width: 100px;
            height: 100px;
            background: green;
            border-radius: 50%;
        }
        .staciakampis {
            background: gray;
            width: 125px;
            height: 75px;
            border: 1px solid black;
        }
        /*            Pirmas lygis*/
        .pzda-level-1 .lygis-1 {
            background: green;
        }
        .pzda-level-1 .lygis-1 span {
            display: inline-block;
        }
        /*            Antras lygis*/
        .pzda-level-2 .lygis-1 {
            background: green;
        }
        .pzda-level-2 .lygis-2 {
            background: yellow;
        }
        .pzda-level-2 .lygis-2 span {
            display: inline-block;
        }
        /*            Trecias lygis*/
        .pzda-level-3 .lygis-1 {
            background: green;
        }
        .pzda-level-3 .lygis-2 {
            background: yellow;
        }
        .pzda-level-3 .lygis-3 {
            background: pink;
        }
        .pzda-level-3 .lygis-3 span {
            display: inline-block;
        }
        /*            Ketvirtas lygis*/
        .pzda-level-4 .lygis-1 {
            background: green;
        }
        .pzda-level-4 .lygis-2 {
            background: yellow;
        }
        .pzda-level-4 .lygis-3 {
            background: pink;
        }
        .pzda-level-4 .lygis-4 {
            background: red;
        }
        .pzda-level-4 .lygis-4 span {
            display: inline-block;
        }
        .text-1 {
            color: green;
        }
        .text-2 {
            color: yellow;
        }
        .text-3 {
            color: pink;
        }
        .text-4 {
            color: red;
        }
        .centruojam {
            display: flex;
            flex-direction: column;
            align-items: center;
            font-size: 4vh;
        }
    </style>
</head>
<body>
<div class="pzdamat <?php print $css_class; ?>">
    <div class="lygis-0"></div>
    <div class="lygis-1 staciakampis"><span>PX</span></div>
    <div class="lygis-2 staciakampis"><span>BL</span></div>
    <div class="lygis-3 staciakampis"><span>NX</span></div>
    <div class="lygis-4 staciakampis"><span>PZDA</span></div>
</div>
<ul class="centruojam">
    <?php foreach ($atrinktieji as $atrinktieji_index => $atrinktieji_value): ?>
        <li class="text-<?php print $atrinktieji_index + 1; ?>">
            <?php print $atrinktieji_value; ?>
        </li>
    <?php endforeach; ?>
</ul>
</body>
</html>