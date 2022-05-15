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

$capital = array("Gujrat" => "GandhiNagar", "Assam" => "Mizoram", "Punjab" => "Chandigarh");
foreach($capital as $key => $value) {
    echo "Capital of <b>$key</b> is <b>$value</b> <br />";
}


?>

</body>
</html>