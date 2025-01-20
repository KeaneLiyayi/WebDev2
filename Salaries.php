<?php

$name = $_POST['name'];
$nameOfItm = $_POST['nameOfItm'];
$ppItem = $_POST['ppitem'];
$noItemsSold = $_POST['itmsold'];

$totalSales = $ppItem * $noItemsSold;

echo $name . ": " . $totalSales;
$commision;

if ($totalSales >= 1000000) {
    $commision = $totalSales * 0.1;
}
