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

        public function __construct(?string $color, ?float $price, ?string $temperature)//set info
        {
            $this->color = $color;
            $this->price = $price;
            $temperature = "cold";
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
        return 'This is ' . $this->name . ' and the color is ' .  $this->getColor();
    }

    public function setBeerColor(?string $color)//userXP alles apart plaatsen
    {
        $this->setColor($color);
    }
    public function setBeerPrice(?float $price)//userXP alles apart plaatsen
    {
        $this->setPrice($price);
    }
    public function setBeerTemp(?string $temperature)//userXP alles apart plaatsen
    {
        $this->setTemp($temperature);
    }
    public function setBeerName(?string $name)//userXP alles apart plaatsen
    {
        $this->name = $name;
    }
    public function setBeerAlocoholPercentage(?float $alcoholPercentage)//userXP alles apart plaatsen
    {
        $this->alcoholPercentage = $alcoholPercentage;
    }

    // TODO: Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alcochol percentage of 8.5 and I have a light color."

    public function getBeer() : string
    {
        return 'Hi! I\'m ' . $this->name . ' and have an alcochol percentage of ' . $this->alcoholPercentage . ' and I have a ' . $this->getColor() . ' color.<br>It costs €' . $this->getPrice() . ' and is best served ' . $this->getTemp() . '.';
    }

        public function getAlcoholPercentage()
    {
        echo 'This beverage contains ' . $this->alcoholPercentage .'% alcohol! and the color is ' . $this->getColor() .'.<br>';
    }
}

$beer1 = new Beer("blond", 4.50, "", "Duvel", 8.3);
echo $beer1->getBeer();

$beer1->setBeerColor("light", 5.5, "", "Duvel", 8.3);//use set to update the info of get

echo '<br>';
echo $beer1->getInfo();

echo '<br>';
$beer2 = new Beer("white", 4.50, "", "Duvel", 8.3);
echo $beer2->getAlcoholPercentage();
