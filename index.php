<?php
//GRIKIAI su dienu (kintamasis 'praejo dienu')
$grikiai_start = 5000;
$grikiai = $grikiai_start;
$survive_days = 0;
$result = "";



for ($day = 1; $day < 100; $day++) {
    $sunaudojimas = rand(200, 500);
    if ($grikiai >= 500) {
        $grikiai -=$sunaudojimas;
        $survive_days++;
        $result .= "Grikiu yra $grikiai per $survive_days dienas." . '<br>';
    } else {
        $result .= "Paskutine diena $survive_days. Grikiu liko $grikiai" . '<br>';
        break;
    }
}


?>
<!DOCTYPE html>
<html>
<head>
    <title>ciklai</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

    <?php print $result; ?>

</body>
</html>