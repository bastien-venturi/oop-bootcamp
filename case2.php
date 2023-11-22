<form method="post">
    <input type="submit" name="nodiscount" value="No Discount">
    <input type="submit" name="banana" value="Banana">
    <input type="submit" name="apple" value="Apple">
</form>

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

if (isset($_POST['banana'])) {
    $fruits[0]->price -= 1/2 ;
}
if (isset($_POST['apple'])) {
    $fruits[1]->price -= 1.5/2 ;
}
if (isset($_POST['nodiscount'])) {
    $fruits[0]->price ;
    $fruits[1]->price ;
}
var_dump($fruits);


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
            $total += ($fruit->quantity * $fruit->price * 6 / 100) + $fruit->quantity * $fruit->price;
        }

        foreach ($this->beverages as $beverage) {
            $total += ($beverage->quantity * $beverage->price * 21 / 100) + $beverage->quantity * $beverage->price;
        }

        return $total;
    }
}

$basket = new Basket($fruits, $beverages);
echo "Overall total cost of the basket: " . $basket->total() . " € <br>";
?>
