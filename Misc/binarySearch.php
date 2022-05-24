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

function binarySearch(Array $arr, $x) {
    if(count($arr) === 0) {
        return false;
    }

    $low = 0;
    $high = count($arr) - 1;

    while ($low <= $high) {
        $mid = floor(($high + $low) / 2);

        if($arr[$mid] === $x) {
            return true;
        }

        if($x < $arr[$mid]) {
            $high = $mid - 1;
        } else {
            $low = $mid + 1;
        }
    }

    return false;
}

$arr = array(1,2,3,4,5);
$value = 5;
if(binarySearch($arr, $value) == true) {
    echo "Exists";
} else {
    echo "Does not Exists";
}

?>

</body>
</html>