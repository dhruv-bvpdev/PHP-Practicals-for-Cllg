<?php 

$number = 6;
$sum = 0;
for($i = 1; $i < $number; $i++) {
    if($number % $i === 0) {
        $sum = $sum + $i;
    }
}

if($number === $sum) {
    echo "Perfect Number";
} else {
    echo "Not a Perfect Number";
}


?>