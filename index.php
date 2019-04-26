<?php

function amzius($amzius) {
    if ($amzius < 0) {
        return 'klaida';
    }
    if ($amzius <= 18) {
        return 'nepilnametis';
    } if ($amzius < 65) {
        return 'pilnametis';
    } if (66 < $amzius) {
        return 'pensininkas';
    }
}

print amzius(120);


?>
<!DOCTYPE html>
<html>
<head>
    <title>ciklai</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>

</body>
</html>