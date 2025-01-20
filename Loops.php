<?php
$number = $_POST['num'];
$number2 = $_POST['numb'];

$sum = 0;
for ($i = $number; $i <= $number2; $i++) {
    if ($i % 25 == 0) {

        echo $i . "<br/>";
        $sum += $i;
    }
}

echo "Sum of multiples of 25 between " . $number . " and " . $number2 . " is: " . $sum;
