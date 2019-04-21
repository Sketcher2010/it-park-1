<?php
include("Cupboard.php");

$cupboard = new Cupboard(10, 10, 20);
$cupboard->openDoor();
echo "\n";
$cupboard->closeDoor();
echo "\n";
echo "Объем: ";
echo $cupboard->calculateVolume();