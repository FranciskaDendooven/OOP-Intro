<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

/* EXERCISE 5

Copy the class of exercise 1.

TODO: Change the properties to private.
TODO: Fix the errors without using getter and setter functions.
TODO: Change the price to 3.5 euro and print it also on the screen on a new line.
*/

class Beverage
{
    private ?string $color;
    private ?int $price;
    private $temperature;

    public function __construct(?string $color, ?int $price, $temperature)
    {
        $this->color = $color;

        $this->price = $price;

        $temperature = "cold";
        $this->temperature = $temperature;
    }

    public function drink()
    {
        echo "This beverage is $this->color, €$this->price and $this->temperature.<br>";
        echo "$this->temperature";
    }

}

$otherThanSetGet = function & ($object, $property) {
    $value = & Closure::bind(function & () use ($property) {
        return $this->$property;
    }, $object, $object)->__invoke();

    return $value;
};

$beverage1 = new Beverage("brown", 2, "");
$beverage2 = & $otherThanSetGet($beverage1, 'color');
$beverage1->drink();

echo '<br>';
$beverage1 = new Beverage("light", 2, "");
$beverage2 = & $otherThanSetGet($beverage1, 'color');
$beverage1->drink();
// echo $otherThanSetGet($beverage1, 'color');




// $beverage1->color;
// $beverage1->$color;