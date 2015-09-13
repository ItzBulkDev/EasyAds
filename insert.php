<?php

//CONFIG

//Minimum number of ads to display
$min = 1;

//Maximum number of ads to display
$max = 2;

//FILE TYPE OF THE FILES
$type = "gif";

$num = mt_rand($min, $max);

echo "<a href='ad" . $num . "'><img src='ad" . $num . "." . $type . "'";

?>
