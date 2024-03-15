<?php

require_once 'Car.php';

class ElectricCar extends Car
{
    public float $batteryAutonomy;

    public function __construct(float $price, string $brand, float $batteryAutonomy)
    {
        parent::__construct($price, $brand);
        $this->batteryAutonomy = $batteryAutonomy;
    }

    //La rédefinition de la méthode getCharacteristics() de la classe mère
    public function getCharacteristics(): array
    {
        //Appel de la méthode getCharacteristics() de la classe mère
        $characteristics = parent::getCharacteristics();
        $characteristics['batteryAutonomy'] = $this->batteryAutonomy;

        return $characteristics;
    }
}