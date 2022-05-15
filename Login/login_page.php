<?php 

session_start();

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
    <form action="login_page.php" method="post">
        <label for="username_field">Enter UserName</label>
        <input id="username_field" name="username" type="text" />
        
        <label for="password_field">Enter Password</label>
        <input id="password_field" name="password" type="password" />

        <input type="submit" />
    </form>


    <?php 
    
    if($_POST) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        setcookie("user_name", $username, time() + (86400 * 30), "/");
        setcookie("user_password", $password, time() + (86400 * 30), "/");
        $_SESSION['isLoggedIn'] = "true";
        header("Location: http://localhost:8080/Login/user_page.php");
    }

    ?>
</body>
</html>