<?php

$x = 0;

function change_x(&$x){
    $x = 1;
    return $x;
}

print change_x($x);

var_dump($x);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>title</title>
</head>
<body>


</body>
</html>