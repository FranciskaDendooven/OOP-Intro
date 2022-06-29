<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// TODO: Copy the code of exercise 2 to here and delete everything related to cola.
// TODO: Make all properties private.

class Beverage
    {
        private ?string $color;
        private ?float $price;
        private $temperature;

        public function setBeverage(?string $color, ?float $price, $temperature)
        {
            $this->color = $color;
            $this->price = $price;
            $temperature = "cold";
            $this->temperature = $temperature;
        }
    
        public function __construct(?string $color, ?float $price, $temperature)
        {
            $this->color = $color;
    
            $this->price = $price;
    
            $temperature = "cold";
            $this->temperature = $temperature;
        }

        public function getBeverage(?string $color, ?float $price, $temperature)
        {
            return $this->color;
            return $this->price;
            return $this->temperature;
        }

        public function color()
        {
            echo "This drink is: $this->color";
        }
}

$beverage1 = new Beverage("brown", 3.5, "");
$beverage1->setBeverage("brown", 3.5, "");
$beverage1->getBeverage("brown", 3.5, "");
$beverage1->color();



// class Beer extends Beverage
// {
//     private ?string $name;
//     private ?float $alcoholPercentage;

//     public function setBeer(?string $color, ?float $price, $temperature, ?string $name, ?float $alcoholPercentage)
//     {
//         parent::__construct($color, $price, $temperature);
//         Beverage::__construct($color, $price, $temperature);
//         $this->name = $name;
//         $this->alcoholPercentage = $alcoholPercentage;
//     }

//     public function __construct(?string $color, ?float $price, $temperature, ?string $name, ?float $alcoholPercentage)
//     {
//         parent::__construct($color, $price, $temperature);
//         Beverage::__construct($color, $price, $temperature);
//         $this->name = $name;
//         $this->alcoholPercentage = $alcoholPercentage;
//     }

// public function getAlcoholPercentage()
// {
//     echo "This beverage contains $this->alcoholPercentage% alcohol!<br>";
// }
// public function getDuvel()
// {
//         echo "This $this->name is $this->color, costs €$this->price, contains $this->alcoholPercentage% alcohol and is best served $this->temperature.<br>";
// }
// public function getDuvel2()
// {
//         echo "This $this->name is $this->color, costs €$this->price, contains $this->alcoholPercentage% alcohol and is best served $this->temperature.<br>";
// }
// public function getColor()
// {
//         echo "This is the color: $this->color.";
// }

// }

// $beer1 = new Beer("blond", 0, "", "", 5.5);
// $beer2 = new Beer("blond", 3.5, "", "Duvel", 8.5);
// $beer3 = new Beer("blond", 3.5, "", "Duvel", 8.5);
// $beer4 = new Beer("blond", 0, null, "", 0);

// $beer1->getAlcoholPercentage();
// $beer2->getDuvel();
// $beer3->getDuvel2();
// $beer4->getColor();

/* EXERCISE 3
TODO: Make all the other prints work without error.
TODO: After fixing the errors. Change the color of Duvel to light instead of blond and also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).
TODO: Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alcochol percentage of 8.5 and I have a light color."

Make sure that you use the variables and not just this text line.

TODO: Print this method on the screen on a new line.

USE TYPEHINTING EVERYWHERE!
*/