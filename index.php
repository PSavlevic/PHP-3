<?php

$months = 12;
$kisene = 1000;
$alga = 700;

for ($months = 12; $months>0; $months--) {
    $islaidos = rand(100, 1200);
    $balansas = $kisene + $alga - $islaidos;

    if ($balansas <= 0) {
        print 'Tau pzdc';
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