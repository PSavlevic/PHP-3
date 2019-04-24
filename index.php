<?php

$months = 24;
$car_price_new = 30000;
$car_price_left = $car_price_new;

for ($months; $months > 0; --$months) {
    $car_price_left -= $car_price_left * 0.02;
//    print $car_price_left . '<br>';
}

$depreciated = 100 - (($car_price_left / $car_price_new)*100);
$text = "Po 24 menesiu masinos verte bus: $car_price_left ir nuvertejo $depreciated procentu.";

?>
<!DOCTYPE html>
<html>
<head>
    <title>ciklai</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<p><?php print $text; ?></p>
</body>
</html>