<?php

$zodziai = [
    'lauke', 'ryte', 'prie', 'Maxima', 'masina',
];

$atrinkti_zodziai = [];
foreach ($zodziai as $zodis) {
    $pateko= rand(0, 1);
    if ($pateko) {
        $atrinkti_zodziai[] = $zodis;
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Ataskaita</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
    <p>
        <?php foreach($atrinkti_zodziai as $value): ?>
        <?php print $value . '<br>'?>
        <?php endforeach; ?>
    </p>
</body>
</html>