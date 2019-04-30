<?php

$daiktai = [ 'Kremas', 'Riesutai', 'Lupdazis', 'Kojines'
];
$size = rand(1, 10);
$is_dark = rand(0, 1);
$rand_name = rand(0, count($daiktai)-1);

//randomina tamsius/sviesus
if ($is_dark) {
    $color = 'tamsus';
} else {
    $color = 'sviesus';
}
//spausdinamas tekstas
$text = "$daiktai[$rand_name] uzima $size cm3. Daiktas $color";

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
    <?php print $text; ?>.
</p>
</body>
</html>