<?php 

$cookie_name="user";
$cookie_value="Dhruv";
setcookie($cookie_name, "", time() - 3600);

?>



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
    
    echo "Cookie '$cookie_name' is deleted";

    ?>
</body>
</html>