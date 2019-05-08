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
</body>
</html>
