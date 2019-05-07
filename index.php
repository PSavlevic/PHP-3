<?php

$x = 0;
$b = &$x;

unset($b);

$b = 1;
print $x;

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