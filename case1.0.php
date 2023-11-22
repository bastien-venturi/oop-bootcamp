<?php

$bananaQuantity = 6;
$bananaPrice = 1;

$appleQuantity = 3;
$applePrice = 1.5;

$wineBottleQuantity = 2;
$wineBottlePrice = 10;

// Calculate the total cost for each type of item
$totalBananaCost = $bananaQuantity * $bananaPrice;
$totalAppleCost = $appleQuantity * $applePrice;
$totalWineCost = $wineBottleQuantity * $wineBottlePrice;

// Calculate the overall total cost
$totalfruit = ($totalBananaCost + $totalAppleCost) + (($totalBananaCost + $totalAppleCost) * 6 / 100);
$totalBeverage = $totalWineCost + ($totalWineCost * 21 / 100);
$totalCost = $totalfruit + $totalBeverage;
// Display the results

echo "Overall total cost of the basket: €$totalCost <br>";

?>
