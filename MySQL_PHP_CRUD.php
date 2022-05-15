<?php 

$port = "localhost:3306";
$user="root";
$password="";
$conn = mysqli_connect($port, $user, $password);
if(!$conn) {
    die("Could Not Connect".mysqli_error());
} else {
    echo "Connected Successfully<br />";
} 

$create_DB_query = 'CREATE DATABASE test_db';
if(mysqli_query($conn, $create_DB_query)) {
    echo "Database created<br />";
} else {
    echo "No Database Created Error: ".mysqli_error($conn);
}

mysqli_select_db($conn, "test_db");

$create_table_query = 'CREATE TABLE test_table (
    id INT NOT NULL,
    uname VARCHAR(20),
    email varchar(35) UNIQUE,
    phone BIGINT
)';
if(mysqli_query($conn, $create_table_query)) {
    echo "Table Created<br />";
} else{
    echo "No Table Created Error: ".mysqli_error($conn);
}

$insert_data_query = 'INSERT INTO test_table (id, uname, email, phone) VALUES (1, "Dhruv", "test@test.com", 99990000)';
if(mysqli_query($conn, $insert_data_query)){  
    echo "Record Inserted Successfully<br />";  
} else{  
   echo "Could Not Insert Record: ".mysqli_error($conn);  
}  

$get_record_query = 'SELECT * FROM test_table';
$retval = mysqli_query($conn, $get_record_query);

if(mysqli_num_rows($retval) > 0) {
    while($row = mysqli_fetch_assoc($retval)) {
        echo "ID :{$row['id']}<br />"."Name: {$row['uname']}<br />"
        ."Email: {$row['email']}<br />"."Phone: {$row['phone']}";
    }
}

?>

<!-- Update Query
$sql = "update emp4 set name="ram", salary=10000 where id=10";   -->