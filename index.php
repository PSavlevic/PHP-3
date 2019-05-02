<?php

/**
 * Generuoja dinaminę matricą
 * @param integer $size Matricos dydis
 * @return array
 */
function slot_run($size)
{
    $array = [];

    for ($x = 1; $x <= $size; $x++) {
        $row = [];

        for ($z = 1; $z <= $size; $z++) {
            $row[] = rand(0, 1);
        }

        $array[] = $row;
    }

    return $array;
}

function winning_slot($matrix)
{
    $winning_rows = [];

    foreach ($matrix as $index => $row) {
        $row_winning_sum = count($row);
        $column_sum = 0;

        foreach ($row as $column) {
            $column_sum += $column;
        }
        if ($row_winning_sum == $column_sum) {
            $winning_rows[] = $index;
        }
        if ($column_sum == 0) {
            $winning_rows[] = $index;
        }
    }

    return $winning_rows;
}

//var_dump(slot_run(10));
$array = slot_run(3);
$winning_rows = winning_slot($array);
var_dump($winning_rows);

$winning = count($winning_rows);  // 5 uzduotis
if ($winning > 0) {
    $text = "Tau iskrito $winning tu laimejai!!!";
} else {
    $text = 'Tau pazd3c you lost';
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Klasės darbas, 05.02</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
        div {
            border: 3px solid black;
            padding: 20px;
            margin: 20px;
            height: 5vh;
            width: 5vh;
        }

        section {
            display: flex;
            justify-content: center;
            align-items: baseline;
        }

        .yellow {
            background-color: blue;
        }

        .green {
            background-color: orange;
        }
    </style>
</head>
<body>
<p><?php print $text; ?></p>  <!-- 5 uzduotis
<?php foreach ($array as $index => $value): ?>
    <section>
        <?php foreach ($value as $index => $random): ?>
            <?php if ($random): ?>
                <div class="yellow"></div>
            <?php else: ?>
                <div class="green"></div>
            <?php endif; ?>
        <?php endforeach; ?>
    </section>
<?php endforeach; ?>

</body>
</html>
