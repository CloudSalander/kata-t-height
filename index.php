<?php

//TODO: validate entry
$height = intval(readline("Please, enter the T height that you want"));

$firstLine = "";

$firstLine = str_repeat("T",$height);
if($height%2 == 0) {
    $middle = intdiv($height,2);
    $firstLine = substr($firstLine, 0, $middle) . " " . substr($firstLine, $middle);
}

echo $firstLine.PHP_EOL;


?>