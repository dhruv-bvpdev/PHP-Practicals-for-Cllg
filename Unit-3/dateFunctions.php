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

var_dump(checkdate(12,32,2013));
$date=date_create("2013-03-15");
$date1=date_create("2013-12-12");
echo date_format($date,"Y/m/d")."<br />";
$diff=date_diff($date,$date1);
echo $diff->format("%R%a days")."<br />";
$date2=date_create("2013-05-01");
date_modify($date2,"+15 days");
echo date_format($date2,"Y-m-d")."<br />";

?>

</body>
</html>