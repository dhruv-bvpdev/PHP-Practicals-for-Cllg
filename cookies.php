<?php 

//setting a cookie
$cookie_name="user";
$cookie_value="Dhruv";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
//* 86400 = 1 day

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies in PHP</title>
</head>
<body>
    <?php 

    //retieving a cookie
    if(isset($_COOKIE['user'])) {
        echo "Cookie is set. Value for cookie '$cookie_name' is: $cookie_value";
    } else {
        echo "Cookie is not set";
    }

    //deleting a cookie
    setcookie("user", "", time() - 3600);
    
    ?>
    
</body>
</html>