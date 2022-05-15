<?php 

$port = "localhost:3306";
$username = "root";
$password = "";

//* Create Connection
$conn = mysqli_connect($port, $username, $password);
if(!$conn) {
    echo "Connection Failed".mysqli_error();
} else {
    echo "Connection successfull<br />";
}

//* Check id DB exsists, if not then create DB
$check_db_exsists = "SHOW DATABASES LIKE 'test_db'";
$retval = mysqli_query($conn, $check_db_exsists);
if(mysqli_num_rows($retval) > 0 ) {
    echo "Db already Exsists<br />";
} else {
    $create_db_query = "CREATE DATABASE test_db";
    if(mysqli_query($conn, $create_db_query)) {
        echo "Created Database test_db<br />";
    } else {
        echo "No database created".mysqli_error($conn);
        return;
    }
}

//* select the DB to work on
mysqli_select_db($conn, "test_db");

//* Check id table exsists, if not then create table
$check_table_exsists = "SHOW TABLES LIKE 'test_table'";
$retval = mysqli_query($conn, $check_table_exsists);
if(mysqli_num_rows($retval) > 0 ) {
    echo "Table Alraedy Exsists<br />";
} else {
    $create_table_query = "CREATE TABLE test_table(
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        uname VARCHAR(35),
        email VARCHAR(40),
        phone BIGINT
    )";
    
    if(mysqli_query($conn, $create_table_query)) {
       echo "Created Table test_table<br />";
    } else {
       echo "No table created".mysqli_error($conn);
       return;
    }
}


?>