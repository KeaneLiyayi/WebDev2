<?php

for ($i = 1; $i < 10; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}


for ($i = 1; $i <= 10; $i++) {

    for ($j = 10; $j >= $i; $j--) {
        echo "* ";
    }
    echo "<br>";
}

$i = 20;
$sum = 0;


while ($i <= 30) {
    if ($i % 5 == 0) {
        $sum = $sum + $i;
        echo $i . "<br/>";
    }
    $i++;
}

echo $sum;

$a = 0;
