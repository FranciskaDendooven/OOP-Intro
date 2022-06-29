<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// TODO: Make class beer that extends from Beverage.
// TODO: Create the properties name (string) and alcoholPercentage (float).
// TODO: Foresee a construct that's allows us to use all the properties from beverage and that sets the values for name and alcoholPercentage.

// Remember for now we will use properties and methods that can be accessed from everywhere.
// TODO: Make a getAlcoholPercentage function which returns the alcoholPercentage.

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
}

class Beer extends Beverage
{
    public ?string $name;
    public ?float $alcoholPercentage;

    public function __construct(?string $name, ?float $alcoholPercentage)
    {
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }

public function getAlcoholPercentage()
{
    echo "This beverage contains $this->alcoholPercentage% alcohol!";
}
}

$beer1 = new Beer("", 5.5);

$beer1->getAlcoholPercentage();





/* EXERCISE 2

TODO: Make class beer that extends from Beverage.
TODO: Create the properties name (string) and alcoholPercentage (float).
TODO: Foresee a construct that's allows us to use all the properties from beverage and that sets the values for name and alcoholPercentage.

Remember for now we will use properties and methods that can be accessed from everywhere.
TODO: Make a getAlcoholPercentage function which returns the alcoholPercentage.
TODO: Instantiate an object which represents Duvel. Make sure that the color is set to blond, the price equals 3.5 euro and the temperature to cold automatically.
TODO: Also the name equal to Duvel and the alcohol percentage to 8,5%
TODO: Print the getAlcoholPercentage 2 times on the screen in two different ways, print the color on the screen and the getInfo.

Make sure that each print is on a different line.
Try to get this error on the screen= Fatal error: Uncaught Error: Call to undefined method Beverage::getAlcoholPercentage() in /var/www/becode/workshop/exercise2.php on line 64
USE TYPEHINTING EVERYWHERE!
*/