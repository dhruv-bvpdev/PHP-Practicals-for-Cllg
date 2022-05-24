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

    $max = 0;
    $numbers = array(36,2,9,56,1001);
    foreach($numbers as $number) {
        if ($number > $max) {
            $max = $number; 
        }
    }
    echo $max;

?>

</body>
</html>