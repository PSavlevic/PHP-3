<?php

if (!empty ($_POST)) {
    $result = ($_POST['patvirtinimas']);
    $result++;
} else {
    $result = '0';
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>title</title>
</head>
<body>
    <form action="index.php" method="post">
        <button name="patvirtinimas" value="<?php print $result; ?>"><?php print $result; ?></button>
    </form>
    <?php for ($x = 0; $x < $result; $x++): ?>
        <img src="https://static.vecteezy.com/system/resources/thumbnails/000/436/882/small/Food__28466_29.jpg?1555154176?nocache=true&cache_buster=47420021-b716-44c8-a3c2-cff4d975dda2"
             alt="">
    <?php endfor; ?>
</body>
</html>
