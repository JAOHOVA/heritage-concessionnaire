<?php

require_once 'ElectricCar.php';
require_once  'GasolineCar.php';
require_once 'carFunctions.php';

$tesla = new ElectricCar(50000, 'Tesla', 560);
$renault = new GasolineCar(20000, 'Renault', 100);

/*var_dump($tesla->getCharacteristics());
echo '<br>';
var_dump($renault->getCharacteristics());*/

displayCharacteristics($tesla);
displayCharacteristics($renault);
