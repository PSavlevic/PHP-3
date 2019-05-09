<?php

$hack = filter_input_array (INPUT_POST, [
    'hack_me' => FILTER_SANITIZE_SPECIAL_CHARS,
    ]);

if (!empty($hack)) {
    $text = $hack['hack_me'];
} else {
    $text = 'Ivesk kazka';
}


//var_dump($hack);
?>
<html>
    <body>
    <h1><?php print $text; ?></h1>
        <form method="post">
            <input type="text" name="hack_me" placeholder="Hack Me" required>
            <button name="button" value="push">Try</button>
        </form>
    </body>
</html>