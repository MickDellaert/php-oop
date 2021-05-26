<?php

declare(strict_types = 1);

echo "<hr> <h3> exercise 1 </h3>";

class Beverage {

    var string $color;
    var float $price;
    var string $temperature;


    function __construct(string $color, float $price, string $temperature = 'cold')
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }


    function getInfo()
    {
        return 'This beverage is ' . $this->temperature . ' and ' . $this->color . '<br/>';
    }

}

$cola = new Beverage('black', 2.0);

echo $cola->getInfo() . '<br/>';
