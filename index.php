<?php
function tinkamis_zodis($text) {
    return str_replace('blet', '****', $text);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php print tinkamis_zodis('Contrary to popular blet belief,  of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.'); ?>
</body>
</html>