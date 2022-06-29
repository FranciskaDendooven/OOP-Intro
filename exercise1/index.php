<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// TODO: Create a class beverage.
// Remember for now we will use properties and methods that can be accessed from everywhere.
// TODO: Create the properties color (string), price (float) and temperature (string) and also foresee a construct.
// TODO: Have a default value "cold" in the construct for temperature.
// TODO: Make a getInfo function which returns "This beverage is <temperature> and <color>."
// TODO: Instantiate an object which represents cola. Make sure that the color is set to black, the price equals 2 euro and the temperature to cold automatically
//  print the getInfo on the screen.

class Beverage
{
    public ?string $color;
    public ?int $price;
    public $temperature;

    public function __construct(?string $color, ?int $price, $temperature)
    {
        $this->color = $color;

        $this->price = $price;

        $temperature = "cold";
        $this->temperature = $temperature;
    }

    public function getInfo()
    {
        echo "This beverage is $this->color, €$this->price and $this->temperature.";
    }

}

$beverage1 = new Beverage("black", 2, "");

$beverage1->getInfo();

// TODO: Instantiate an object which represents cola. Make sure that the color is set to black, the price equals 2 euro and the temperature to cold automatically
//  print the getInfo on the screen.
// TODO: Print the temperature on the screen.