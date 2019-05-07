<?php

$x = 0;

function change_x(&$x){
    $x = 1;
}
change_x($x);

print $x;

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