<?php

$ToGive = floatval($argv[1]);
define("GELDSOORTEUROS", [50,20,10,5,2,1]);
define("GELDSOORTCENTEN", [50,20,10,5,2,1]);
$RestToGive = $ToGive;
$RestToGive1 = $ToGive * 100;
if($ToGive != 0){
foreach(GELDSOORTEUROS as $geldeenheid){
    if($RestToGive >= $geldeenheid){
        $HowFit = floor($RestToGive/$geldeenheid);
        $RestToGive = $RestToGive % $geldeenheid;
        echo($HowFit . " x " . $geldeenheid . " euros" . PHP_EOL);
    }
}
foreach(GELDSOORTCENTEN as $geldeenheid1){
    $RestToGive1 = substr($RestToGive1,-2,2);
    if($RestToGive1 >= $geldeenheid1){
        $HowFit1 = floor($RestToGive1/$geldeenheid1);
        $RestToGive1 = $RestToGive1 % $geldeenheid1;
        echo($HowFit1 . " x " . $geldeenheid1 . " centen" . PHP_EOL);
    }
}
}

?>

