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
    
    if(isset($_POST['submit'])) {
        $num1 = $_POST['number1'];
        if($num1 % 2 === 0) {
            echo "Number is Even";
        } else {
            echo "Number is odd";
        }
    }
    
    ?>
</body>
</html>