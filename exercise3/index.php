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
        private ?string $temperature;

        public function __construct(?string $color, ?float $price, ?string $temperature = "cold")//set info
        {
            $this->color = $color;
            $this->price = $price;
            $this->temperature = $temperature;
        }

        protected function setColor(?string $color)//to update info
        {
            $this->color = $color;
        }
        protected function setPrice(?float $price)//to update info
        {
            $this->price = $price;
        }
        protected function setTemp(?string $temperature)//to update info
        {
            $this->temperature = $temperature;
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

    public function getInfo() : string
    {
        return 'This is' . $this->name . 'and the color is' .  $this->getColor();
    }

    public function setBeer(?string $color, ?float $price, ?string $temperature, ?string $name, ?float $alcoholPercentage)
    {
        $this->setColor($color);
        $this->setPrice($price);
        $this->setTemp($temperature);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }//userXP alles apart plaatsen
    public function getBeer()
    {
        return 'This is a ' . $this->name . ' and is ' . $this->getColor() . '. It costs ' . $this->getPrice() . '. It is also best served ';
    }

        public function getAlcoholPercentage()
    {
        echo 'This beverage contains' . $this->alcoholPercentage .'% alcohol! and the color is' . $this->getColor() .'.<br>';
    }
}

$beer1 = new Beer("blond", 0, "", "Duvel", 5.5);

echo $beer1->getBeer();

$beer1->setBeer("blond", 5.5, "", "Duvel", 5.5);

echo '<br>';
echo $beer1->getInfo();

// $beer1->getAlcoholPercentage();


/* EXERCISE 3
TODO: Make all the other prints work without error.
TODO: After fixing the errors. Change the color of Duvel to light instead of blond and also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).
TODO: Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alcochol percentage of 8.5 and I have a light color."

Make sure that you use the variables and not just this text line.

TODO: Print this method on the screen on a new line.

USE TYPEHINTING EVERYWHERE!
*/