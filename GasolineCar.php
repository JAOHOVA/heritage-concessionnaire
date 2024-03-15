<?php

require_once 'Car.php';

class GasolineCar extends Car
{
    public float $co2Emission;

    public function __construct(float $price, string $brand, float $co2Emission)
    {
        parent::__construct($price, $brand);
        $this->co2Emission = $co2Emission;
    }

    //La rédefinition de la méthode getCharacteristics() de la classe mère
    public function getCharacteristics(): array
    {
        //Appel de la méthode getCharacteristics() de la classe mère
        $characteristics = parent::getCharacteristics();
        $characteristics['co2Emission'] = $this->co2Emission;

        return $characteristics;
    }
}