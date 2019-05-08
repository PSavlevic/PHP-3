<?php

if (isset ($_POST['patvirtinimas'])) {
    $result = square($_POST['skaicius']);
} else {
    $result = ' ivesk skaiciu';
}

function square($x)
{
    return $x ** 2;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>title</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form action="index.php" method="post">
        <span>Ka pakelti kvadratu:</span>
        <input type="text" name="skaicius">
        <input type="submit" name="patvirtinimas">
    </form>
    <h1><?php print "Atsakymas:" . $result; ?></h1>
</body>
</html>
