<?php
require "figther.php";

$fighter1 = new Fighter();
$fighter2 = new Fighter();

echo $fighter1->getFighterDetails();
echo $fighter2->getFighterDetails();

echo "\nCombate: \n".$fighter1->getNombre()." (".$fighter1->total().") Vs ".$fighter2->getNombre()." (".$fighter2->total().") \n";

if ($fighter1->total() > $fighter2->total()) {
    echo "Gana: " . $fighter1->getNombre() . " (" . $fighter1->getId() . ")\n";
} elseif ($fighter1->total() < $fighter2->total()) {
    echo "Gana: " . $fighter2->getNombre() . " (" . $fighter2->getId() . ")\n";
} else {
    echo "Empate\n";
}
?>
