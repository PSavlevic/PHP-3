<?php
$months = 24;
$car_new_price = 30000;
$car_price = $car_new_price;
$car_price_used = $car_new_price - $car_price;
$procentaliai = (($car_price / $car_new_price) * 100);

for ($i=1; $i <= 24; $i++) {
    $car_price -= round($car_price * 0.02);
    print "$car_price po $i ciklu" . "<br>";
}
  $text = "Po 24 menesiu, masinos verte bus $car_price. ";
?>
<!DOCTYPE html>
<html>
<head>
    <title>ciklai</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<section>
 <?php print $text; ?>
</section>
</body>
</html>