<?php
/**
 * @return  pavaizduotas html'e sugeneruotas arrejus
 */
function slot_run($size)
{
    $array = [];

    for ($x = 1; $x <= $size; $x++) {
        $row = [];

        for ($y = 1; $y <= $size; $y++) {
            $row[] = rand(0, 1);
        }
        $array[] = $row;
    }
    return $array;
}

$array = slot_run(7);

var_dump(slot_run(5));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style.css">
    <style>
        section div {
            border: 3px solid black;
            padding: 20px;
            margin: 20px;
        }

        section {
            display: flex;
            justify-content: center;
            align-items: baseline;
        }

        .blue {
            background-color: blue;
        }

        .orange {
            background-color: orange;
        }
    </style>
</head>
<body>
<?php foreach ($array as $index => $value): ?>
    <section>
        <?php foreach ($value as $index => $valuee): ?>
            <?php if ($valuee): ?>
                <div class="blue"></div>
            <?php else: ?>
                <div class="orange"></div>
            <?php endif; ?>
        <?php endforeach; ?>
    </section>
<?php endforeach; ?>
</body>
</html>