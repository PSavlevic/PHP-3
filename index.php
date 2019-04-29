<?php

$dishes = [
    'nut_salad' => [
        'name' => 'Nuts Salad',
        'price' => 3.44,
        'img' => 'http://www.clker.com/cliparts/3/m/v/Y/E/V/small-red-apple-hi.png',
        'ingredients' => [
            'Nuts',
            'Joghurt'
        ]
    ],
    'bulldish' => [
        'name' => 'Bulldish',
        'price' => 4.77,
        'img' => 'http://clipart-library.com/data_images/320469.png',
        'ingredients' => [
            'Rice',
            'Soja sauce'
        ]
    ]
];

//Dauniaus variantas (paprastesnis)

//print $dishes['nut_salad']['name'];
//print $dishes['nut_salad']['price'];
//print $dishes['nut_salad']['ingredients'][0];
//print $dishes['nut_salad']['ingredients'][1] . '<br>';
//
//print $dishes['bulldish']['name'];
//print $dishes['bulldish']['price'];
//print $dishes['bulldish']['ingredients'][0];
//print $dishes['bulldish']['ingredients'][1];

?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<ul>
		<?php foreach ($dishes as $dishes_index =>$dish): ?>
			<li>
                <div>
                    <?php print $dishes_index; ?>
                </div>

				<ul>
					<?php foreach ($dish as $dish_index => $parameters): ?>
						<li>
							<?php print $dish_index;?>
                            <?php if (is_array($parameters)):?>
                                <ul>
                                    <?php foreach ($parameters as $ingri): ?>
                                        <li>
                                            <?php print $ingri; ?>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php else:?>
                                <?php print $parameters  . '<br>';?>
                            <?php endif; ?>
						</li>
					<?php endforeach; ?>
				</ul>
			</li>
		<?php endforeach; ?>
	</ul>
</body>
</html>