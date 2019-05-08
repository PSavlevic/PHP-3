<?php
/**
 *  parasyti f-cija, kuri visus elementus lygius $val_from pakeistu i $val_to. Funkcija turi veikti referencu pagalba, be returno
 */
$array = ['b', 'x', 'x', 'b', 's'];

function change_values(&$array, $val_from, $val_to) {

    foreach ($array as &$value) {
        if ($value == $val_from) {
            $value = $val_to;
        }
    }
}
change_values($array, 'x', 'M');
var_dump($array);

?>