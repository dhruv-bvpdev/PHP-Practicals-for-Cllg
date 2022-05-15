<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <div class="">Input The Number</div>
        <input type="number" name="number1"><br /><br />  
        <input type="submit" name="submit" value="Find">
    </form>

    <?php
    
    if($_POST) {
        $num1 = $_POST['number1'];
        for($i = 2; $i <= $num1 - 1; $i++) {
            if($num1 % $i == 0) {
                $ans = true;
            } 
        }
    }

    if(isset($ans) && $ans) {
        echo "Number is not prime";
    } else {
        echo "Number is prime";
    }
    
    ?>
</body>
</html>