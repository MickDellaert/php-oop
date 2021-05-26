<?php

declare(strict_types = 1);

echo "<hr> <h3> exercise 6 </h3>";

class Beverage5 {

    private string $color;
    private float $price;
    private string $temperature = 'cold';
    private static int $timesServed = 0;

    public function __construct(string $color, float $price, string $temperature)
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
        self::$timesServed += 1;
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

    public static function getNewOrder()
    {
        return self::$timesServed;
    }
}

class Drinks extends Beverage5 {

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

$duvelBeer = new Drinks('blond', 3.5, 'Duvel', 8.5, );
echo $duvelBeer->getAlcoholpercentage() . '<br/>';
echo $duvelBeer->getTemperature() . '<br/>';
echo $duvelBeer->getColor() . '<br/>';
$duvelBeer->setColor('light');
echo $duvelBeer->getInfo() . '<br/>';
echo $duvelBeer->beerInfo() .'<br/>';


$greenTea = new Drinks('green', 3, 'Green Tea', 0);
echo $greenTea->beerInfo();
echo Beverage5::getNewOrder();