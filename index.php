<?php

?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Hey Hey</title>
    <style>
        .produktas {
            display: flex;
            height: 50px;
            text-align: center;
            font-weight: bold;

        }
        .pavadinimas {
            border: 1px solid black;
            flex: 1;
        }
        .kaina {
            border: 1px solid black;
            flex: 1;
        }
        .aprasymas {
            border: 1px solid black;
            flex: 1;
        }
        .nuolaida {
            border: 1px solid black;
            flex: 1;
        }
    </style>
</head>
<body>
    <div class="produktas">
       <span class="pavadinimas">pavadinimas</span>
       <span class="kaina">kaina</span>
       <span class="aprasymas">aprasymas</span>
       <span class="nuolaida">nuolaida</span>
    </div>
</body>
</html>