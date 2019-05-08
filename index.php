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
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form action="index.php" method="post">
    <button name="patvirtinimas" value="<?php print $result; ?>"> <?php print $result; ?> </button>
    <input type="reset" name="reset">
    </form>
</body>
</html>
