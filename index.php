<?php

$arr = [
    ['data1',
        'data2',
        'data3',
        'data4',
        'data5',
        '',
        'data6',
        'data7',
        'data8',
        'data9',
        'data10',
        'data11',
        'data12',
        'data13',
        'data14',
        'data15',],
    ['Visa darbo diena',
        6, 8, 10, 12, 14, '', 14, 16, 14, 12, 18, 18, 15, 15],
    ['Puse darbo dienos',
        4, 4, 4, 4, 4, '', 4, 4, 4, 4, 4, 4, 4, 4
    ],
    ['Darbuotoju skaicius',
        8, 10, 12, 14, 16, '', 16, 18, 16, 14, 20, 20, 17, 17
    ],
];

//foreach ($arr[1] as $row_index => $row_array) {
//   print $row_array;
//
//}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Klasės darbas, 05.02</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
        .remelis {
            border: 1px solid black;
            padding: 10px;
            width: 15%;
            margin: auto;
            display: inline-block;
        }
    </style>
</head>
<body>
<?php foreach ($arr[1] as $row_index => $row_array): ?>
<div class="remelis">
    <?php print $row_array; ?>
</div>
<?php endforeach; ?>
</body>
</html>