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
        $number = $_POST['number1'];
        $n1 = 0;
        $n2 = 1;
        echo $n1.' '.$n2.' ';
        for($i = 1; $i <= $number - 2; $i++) {
            $n3 = $n1 + $n2;
            echo $n3.' ';
            $n1 = $n2;
            $n2 = $n3; 
        }
    }
    
    ?>
</body>
</html>