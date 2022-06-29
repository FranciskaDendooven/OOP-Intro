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

// TODO: Instantiate an object which represents Duvel. Make sure that the color is set to blond, the price equals 3.5 euro and the temperature to cold automatically.
// TODO: Instantiate an object which represents Duvel. Make sure that the color is set to blond, the price equals 3.5 euro and the temperature to cold automatically.
// TODO: Also the name equal to Duvel and the alcohol percentage to 8,5%
// TODO: Print the getAlcoholPercentage 2 times on the screen in two different ways(as a child?), print the color on the screen and the getInfo.

class Beverage
    {
        public ?string $color;
        public ?float $price;
        public $temperature;
    
        public function __construct(?string $color, ?float $price, $temperature)
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

    public function __construct(?string $color, ?float $price, $temperature, ?string $name, ?float $alcoholPercentage)
    {
        parent::__construct($color, $price, $temperature);
        Beverage::__construct($color, $price, $temperature);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }

public function getAlcoholPercentage()
{
    echo "This beverage contains $this->alcoholPercentage% alcohol!<br>";
}
public function getDuvel()
{
        echo "This $this->name is $this->color, costs €$this->price, contains $this->alcoholPercentage% alcohol and is best served $this->temperature.<br>";
}
public function getDuvel2()
{
        echo "This $this->name is $this->color, costs €$this->price, contains $this->alcoholPercentage% alcohol and is best served $this->temperature.<br>";
}
public function getColor()
{
        echo "This is the color: $this->color.";
}

}

$beer1 = new Beer("blond", 0, "", "", 5.5);
$beer2 = new Beer("blond", 3.5, "", "Duvel", 8.5);
$beer3 = new Beer("blond", 3.5, "", "Duvel", 8.5);
$beer4 = new Beer("blond", 0, null, "", 0);

$beer1->getAlcoholPercentage();
$beer2->getDuvel();
$beer3->getDuvel2();
$beer4->getColor();