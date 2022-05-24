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
        <div class="">Input First Number</div>
        <input type="number" name="number1"><br /><br />  
        <div class="">Input Second Number</div>
        <input type="number" name="number2"><br /><br />
        <input type="submit" name="submit" value="Add">
    </form>

    <?php
    
    if(isset($_POST['submit'])) {
        $num1 = $_POST['number1'];
        $num2 = $_POST['number2'];
        $sum = $num1 + $num2;
        echo $sum;
    }
    
    ?>
</body>
</html>