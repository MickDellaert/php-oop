<?php

declare(strict_types = 1);

echo "<hr> <h3> exercise 4 </h3>";


class Beer3 extends Beverage {

    protected string $name;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }
    protected float $alcoholPercentage;

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

$duvelBeer = new Beer3('blonde', 3.5, 'Duvel', 8.5, );
echo $duvelBeer->getAlcoholpercentage(). '<br/>';
echo $duvelBeer->temperature . '<br/>';
echo $duvelBeer->color. '<br/>';
echo $duvelBeer->getInfo(). '<br/>';