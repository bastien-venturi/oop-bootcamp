<?php

class Article {
    public $name;
    public $quantity;
    public $price;

    function __construct($name, $quantity, $price) {
        $this->name = $name;
        $this->quantity = $quantity;
        $this->price = $price;
    }
}

$banana = new Article("Banana's", 6, 1);
$apple = new Article("Apples", 3, 1.5);
$wine = new Article("Bottles of wine", 2, 10);

$fruits = array($banana, $apple);
$beverages = array($wine);

class Basket {
    public $fruits;
    public $beverages;

    function __construct($fruits, $beverages) {
        $this->fruits = $fruits;
        $this->beverages = $beverages;
    }

    function total() {
        $total = 0;

        foreach ($this->fruits as $fruit) {
            $total += $fruit->quantity * $fruit->price * 6 / 100;
        }

        foreach ($this->beverages as $beverage) {
            $total += $beverage->quantity * $beverage->price * 21 / 100;
        }

        return $total;
    }
}

$basket = new Basket($fruits, $beverages);
echo $basket->total();
?>
