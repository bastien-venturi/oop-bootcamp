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
$totalCost = $totalBananaCost + $totalAppleCost + $totalWineCost;

// Display the results
echo "Total cost of bananas: €$totalBananaCost <br>";
echo "Total cost of apples: €$totalAppleCost <br>";
echo "Total cost of wine: €$totalWineCost <br>";
echo "Overall total cost of the basket: €$totalCost <br>";

?>
