<?php

declare(strict_types = 1);

echo "<hr> <h3> exercise 3 </h3>";


class Beer2 extends Beverage {

    private string $name;

    public function getColor(): string
    {
        return $this->color;
    }

    public function getTemperature(): string
    {
        return $this->temperature;
    }

    public function getName(): string
    {
        return $this->name;
    }

    private float $alcoholPercentage;

    function __construct(string $color, float $price, string $name, float $alcoholPercentage, string $temperature='cold')
    {
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
        parent::__construct($color, $price, $temperature);
    }

    public function getAlcoholpercentage()
    {
        parent::getInfo();
        return $this->alcoholPercentage;
    }

    function beerInfo(){
        return 'Hi i\'m ' . $this->getName() . ' and have an alcohol percentage of ' . $this->getAlcoholpercentage() . ' and I have a ' . $this->getColor() . ' color' . '<br/>';
    }
}

$duvelBeer = new Beer2('light', 3.5, 'Duvel', 8.5, );
echo $duvelBeer->getAlcoholpercentage() . '<br/>';
echo $duvelBeer->getTemperature() . '<br/>';
echo $duvelBeer->getColor() . '<br/>';
echo $duvelBeer->getInfo() . '<br/>';
echo $duvelBeer->beerInfo() .'<br/>';