<?php

declare(strict_types = 1);

echo "<hr> <h3> exercise 3 </h3>";

class Beverage2 {

    private string $color;
    private float $price;
    private string $temperature;

    function __construct(string $color, float $price, string $temperature = 'cold')
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    public function getInfo()
    {
        return 'This beverage is ' . $this->temperature . ' and ' . $this->color . '<br/>';
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    public function getTemperature(): string
    {
        return $this->temperature;
    }

    public function setTemperature(string $temperature): void
    {
        $this->temperature = $temperature;
    }
}

class Beer2 extends Beverage2 {

    private string $name;
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

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }
}

$duvelBeer = new Beer2('blond', 3.5, 'Duvel', 8.5, );
echo $duvelBeer->getAlcoholpercentage() . '<br/>';
echo $duvelBeer->getTemperature() . '<br/>';
echo $duvelBeer->getColor() . '<br/>';
$duvelBeer->setColor('light');
echo $duvelBeer->getInfo() . '<br/>';
echo $duvelBeer->beerInfo() .'<br/>';