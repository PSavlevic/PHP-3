<?php
/**
 * @return array sugeneruotas 5x5 arrejus (1 uzd)
 */
function slot_run() {
$arr = [];

    for ($x=1; $x<=5;$x++) {
        $row = [];

        for ($y=1; $y<=5; $y++){
            $row[] = rand(0, 1);
        }
        $arr[] = $row;
    }
    return $arr;
}
var_dump(slot_run());
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
</body>
</html>