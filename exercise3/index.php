<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// TODO: Copy the code of exercise 2 to here and delete everything related to cola.
// TODO: Make all properties private.
// TODO: Make all the other prints work without error.

class Beverage
    {
        private ?string $color;
        private ?float $price;
        private $temperature;

        public function __construct(?string $color, ?float $price, $temperature)//set info
        {
            $this->color = $color;
    
            $this->price = $price;
    
            $temperature = "cold";
            $this->temperature = $temperature;
        }

        protected function setBeverage(?string $color, ?float $price, $temperature)//set info
        {
            $this->color = $color;
            $this->price = $price;
            $temperature = "cold";
            $this->temperature = $temperature;
        }

        protected function getBeverage()//set info
        {
            return $this->color;
            return $this->price;
            return $this->temperature;
        }

        protected function getColor()//get info
        {
            return $this->color;
        }
        protected function getPrice()//get info
        {
            return $this->price;
        }
        protected function getTemp()//get info
        {
            return $this->temperature;
        }

        public function test()
        {
            echo "This drink is: $this->color<br>";
        }
    }

class Beer extends Beverage
{
    private ?string $name;
    private ?float $alcoholPercentage;

    public function __construct(?string $color, ?float $price, $temperature, ?string $name, ?float $alcoholPercentage)
    {
        parent::__construct($color, $price, $temperature);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }

    // public function getInfo() : string
    // {
    //     return $this->getColor;
    // }
    protected function setBeer(?string $color, ?float $price, $temperature, ?string $name, ?float $alcoholPercentage)
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }
    public function getBeer()
    {
        return $this->name;
        return $this->color;
    }
        public function getAlcoholPercentage()
{
    echo "This beverage contains $this->alcoholPercentage% alcohol! and the color is $this->color <br>";
}
}

$beverage1 = new Beverage("brown", 3.5, "");
// $beverage1->getBeverage("brown", 3.5, "");
$beverage1->test();

$beer1 = new Beer("blond", 0, "", "", 5.5);
$beer1->getBeer("blond", 0, "", "", 5.5);
$beer1->getAlcoholPercentage();


// $beer1 = new Beer("blond", 0, "", "", 5.5);
// $beer1 -> setBeer("blond", 0, "", "", 5.5);
// $beer1 -> getBeer("blond", 0, "", "", 5.5);

// $beer2 = new Beer("blond", 3.5, "", "Duvel", 8.5);
// echo $beer2->getBeverage("blond", 3.5, "", "Duvel", 8.5);
// $beer2 -> setBeer("blond", 3.5, "", "Duvel", 8.5);
// $beer2 -> getBeer("blond", 3.5, "", "Duvel", 8.5);
// $beer1->getAlcoholPercentage();
// $beer2->getDuvel1();
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