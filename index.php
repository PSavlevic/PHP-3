<?php
/**
 * @return array sugeneruotas $size arrejus (2 uzd)
 */
function slot_run($size) {
$arr = [];

    for ($x=1; $x<=$size;$x++) {
        $row = [];

        for ($y=1; $y<=$size; $y++){
            $row[] = rand(0, 1);
        }
        $arr[] = $row;
    }
    return $arr;
}
var_dump(slot_run(7));

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