<?php

$height = "";
while(!is_numeric($height) || $height <= 0) {
    $height = readline("Please, enter the T height that you want");
}
$height = intval($height);

$firstLine = "";

$firstLine = str_repeat("T",$height);
$middle = intdiv($height,2);

if($height%2 == 0) {
    $firstLine = substr($firstLine, 0, $middle) . " " . substr($firstLine, $middle);
}

echo $firstLine.PHP_EOL;

$con = 1;
$otherLinesPattern = str_repeat(" ",$height-1);
while($con < $height) {
    $line = substr($otherLinesPattern, 0, $middle) . "T" . substr($otherLinesPattern, $middle);
    echo $line.PHP_EOL;
    ++$con;
}

?>