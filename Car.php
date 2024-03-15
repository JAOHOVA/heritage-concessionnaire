<?php

class Car
{
    public float $price;
    public string $brand;

    public function __construct($price, $brand)
    {
        $this->price = $price;
        $this->brand = $brand;
    }

    //La méthode qui va être rédefinis
    public function getCharacteristics(): array
    {
        //tableau associatif
        return [
            'price' => $this->price,
            'brand' => $this->brand,
        ];
    }
}