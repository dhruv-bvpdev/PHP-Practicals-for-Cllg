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
        $number = $_POST['number1'];
        $sum = 0;
        while($number != 0) {
            $rem = $number % 10;
            $sum = $sum * 10 + $rem;
            $number = $number / 10; 
        }
        if(isset($number) === isset($sum)) {
            echo "$number is Palindrome";
        } else {
            echo "Not Palindrome";
        } 
    }

    ?>
</body>
</html>