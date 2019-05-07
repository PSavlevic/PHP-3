<?php

$roll_joints = true;
$joint1 = false;
$joint2 = false;
$joint3 = false;
$joint1 = &$roll_joints;
$joint2 = &$joint1;
$joint3 = &$joint2;

print $joint1;
print $joint2;
print $joint3;

?>
