<?php
/**
 *  parasyti f-cija, kuri suskaiciuotu kiek masyve $array yra elementu su $val vertemis
 */
$array = ['b', 'x', 'x', 'b', 's'];


function count_values($array, $val)
{
    $atrinktieji = 0;
    foreach ($array as $value) {
        if ($value == $val) {
            $atrinktieji++;
        }
    }
    return $atrinktieji;
}

print count_values($array, 'x');

?>