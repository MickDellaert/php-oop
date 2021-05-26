<?php

declare(strict_types = 1);

echo "<hr> <h3> exercise 2 </h3>";


class Beer extends Beverage {

    var string $name;
    var float $alcoholPercentage;

    function __construct(string $color, float $price, string $name, float $alcoholPercentage, string $temperature='cold')
    {
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
        parent::__construct($color, $price, $temperature);
    }

    function getAlcoholpercentage()
    {
        parent::getInfo();
        return $this->alcoholPercentage;
    }
}

$duvelBeer = new Beer('blonde', 3.5, 'Duvel', 8.5, );
echo $duvelBeer->getAlcoholpercentage(). '<br/>';
echo $duvelBeer->temperature . '<br/>';
echo $duvelBeer->color. '<br/>';
echo $duvelBeer->getInfo(). '<br/>';
