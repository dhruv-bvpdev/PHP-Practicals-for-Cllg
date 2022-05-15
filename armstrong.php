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
        while($num1 != 0) {
            $rem = $num1 % 10;
            $total = $total + $rem * $rem * $rem;
            $num1 = $num1/10;
        }

        if($num1 === $total) {
            echo "ArmStrong Number";
        } else {
             echo "Not a ArmStrong number";
        }     
    }
    
    ?>
</body>
</html>