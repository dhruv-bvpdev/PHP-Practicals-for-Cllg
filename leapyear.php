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
        $year = $_POST['number1'];
        if(($year % 4 == 0) and ($year % 100 != 0) or ($year % 400 == 0)) {
            echo "Leap Year";
        } else {
            echo "Not a Leap Year";
        }
    }
    
    ?>
</body>
</html>