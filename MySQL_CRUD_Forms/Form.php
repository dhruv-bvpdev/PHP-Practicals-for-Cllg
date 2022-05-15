<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms with PHP MySQLi</title>
</head>
<body>
     <!-- A normal form that sends data to the file handling logic !-->
    <form action="MySQL.php" method="post">
        <label for="name">Enter Your Name</label>
        <input type="text" id="name" name="uname">
        <br />
        <br /> 
        <label for="mail">Enter E-Mail</label>
        <input type="email" id="mail" name="email">
        <br />
        <br />
        <label for="phone">Enter Mobile Number</label>
        <input type="number" id="phone" name="mobile" >
        <br />
        <br />
        <input type="submit" value="submit">
    </form>
</body>
</html>