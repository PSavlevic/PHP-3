<?php

$array = [12, 43, 654, 23];
function avg($array) {
    $sum = 0;
    foreach ($array as $value) {
        $sum += $value;
    }
    return ($sum/count($array));
}
print avg($array);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="1">
    <title>title</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>


</body>
</html>