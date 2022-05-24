<?php 

$number = 497;
$sum = 0;
while($number > 0) {
    $rem = $number % 10;
    $sum = $sum + $rem;
    $number = $number / 10;
}

echo "Sum of digits is: ".$sum; 


?>