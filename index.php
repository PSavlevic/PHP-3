<?php

var_dump($_POST);

$form = [
    'fields' => [
        'name' => [
            'label' => 'Mano vardas',
            'type' => 'text',
            'placeholder' => 'Vardas'
        ],
        'zirniai' => [
            'label' => 'Kiek turiu žirnių?',
            'type' => 'text',
            'placeholder' => '1-100'
        ],
        'reason' => [
            'label' => 'Paslaptis, kodėl turiu žirnių',
            'type' => 'password',
            'placeholder' => 'Išsipasakok'
        ]
    ],
    'buttons' => [
        'do_zirniai' => [
            'label' => 'paberti',
        ],
        'do_grikiai' => [
            'label' => 'paberti',
        ]
    ]
];

?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Forms</title>
    <link rel="stylesheet" type="text/css" href="include/normalise.css">
    <link rel="stylesheet" type="text/css" href="include/style.css">
</head>
<body>
<form method="POST">
    <?php foreach ($form['fields'] as $field_id => $field): ?>
        <label>
            <span><?php print $field['label']; ?></span>
            <input type="<?php print $field['type']; ?>" name="<?php print $field_id; ?>" placeholder="<?php print $field['placeholder']; ?>">
        </label>
    <?php endforeach; ?>
    <?php foreach ($form['buttons'] as $button_id => $button): ?>
        <button name="action" value="<?php print $button_id; ?>"><?php print $button['label']; ?></button>
    <?php endforeach; ?>
</form>
</body>
</html>