<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 

function bubbleSort(&$arr, $n) {
    for ($i = 0; $i < $n; $i++) {
        for($j = 0; $j < $n - $i - 1; $j++) {
            if($arr[$j] > $arr[$j+1]) {
                $t = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $t;
            }
        }
    }
}

$arr = array(64,34,25,1,90);
$n = sizeof($arr);
bubbleSort($arr, $n);

for($i = 0; $i < $n; $i++) {
    echo $arr[$i].' ';
}

?>

</body>
</html>