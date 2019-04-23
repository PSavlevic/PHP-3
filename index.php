<?php

$months = 12;
$kisene = 1000;
$alga = 700;

for ($months = 0; $months < 12; $months++) {
    $islaidos = rand(400, 1200);
    $balansas = $kisene + $alga - $islaidos;

    if ($balansas <= 0) {
        print "Tau pzdc per $months menesiu";
        break;
    } else {
        $kisene = $balansas;
    }
}

$text = "likutis $kisene";
?>
<!DOCTYPE html>
<html>
<head>
    <title>20190423</title>
</head>
<body>
<section>
    <p>
        <?php print $text; ?>
    </p>
</section>
</body>
</html>