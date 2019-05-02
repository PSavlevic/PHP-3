<?php
/**
 * @return array 3x3 random array
 */

function slot_run() {
   $array = [
       [rand(0, 1), rand(0, 1), rand(0, 1)],
       [rand(0, 1), rand(0, 1), rand(0, 1)],
       [rand(0, 1), rand(0, 1), rand(0, 1)]
   ];
   return($array);
}

var_dump(slot_run());

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