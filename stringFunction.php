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
        <div class="">Input The String</div>
        <input type="text" name="string"><br /><br />  
        <input type="submit" name="submit" value="Find">
    </form>

    <?php
    
    if($_POST) {
        $string = $_POST['string'];
        echo ucfirst($string)."<br />";
        echo lcfirst($string)."<br />";
        echo ucwords($string)."<br />";
        echo strrev($string)."<br />";
        echo strlen($string)."<br />";
        echo md5($string)."<br />";
        echo rtrim($string)."<br />";
        echo ltrim($string)."<br />";
    }
    
    ?>
</body>
</html>