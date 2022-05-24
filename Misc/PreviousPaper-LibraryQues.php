<?php 

$port = "localhost:3306";
$username = "root";
$password = "";

$conn = mysqli_connect($port, $username, $password);
if (!$conn) {
    die("Could not Connect".mysqli_error());
} else {
    echo "Successfully Connected<br />";
}

$check_db_query = "SHOW DATABASES LIKE 'Library'";
$check_db_value = mysqli_query($conn, $check_db_query);
if(mysqli_num_rows($check_db_value) > 0) {
    echo "Database Already Created <br />";
} else {
    $create_db_query = "CREATE DATABASE Library";
    if(mysqli_query($conn, $create_db_query)) {
        echo "Database Library Successfully Created<br />";
    } else {
        echo "Could not create Database";
    }
}

mysqli_select_db($conn, "Library");

$check_table_query = "SHOW TABLES WHERE Tables_in_library='book_master' OR Tables_in_library='author'";
$check_table_query_value = mysqli_query($conn, $check_table_query);
if(mysqli_num_rows($check_table_query_value) > 0) {
    echo "Tables already created<br />";
} else {
    $create_table_query = "CREATE TABLE author(
        author_id INT NOT NULL AUTO_INCREMENT,
        author_name VARCHAR(35),
        publication VARCHAR(35),
        PRIMARY KEY(author_id)
    );";
    
    $create_table_query .= "CREATE TABLE book_master(
        book_id INT NOT NULL AUTO_INCREMENT,
        book_title VARCHAR(35),
        author_id INT NOT NULL,
        price INT,
        PRIMARY KEY(book_id),
        FOREIGN KEY (author_id) REFERENCES author(author_id)
    )";
    
    if(mysqli_multi_query($conn, $create_table_query)) {
        echo "Book_master and Author table created successfully<br />";
    } else {
        echo "No Table Created";
    }
}

$get_db_records = "SELECT book_master.*,author.* FROM book_master INNER JOIN author ON book_master.author_id = author.author_id";
$retval = mysqli_query($conn, $get_db_records);
if(mysqli_num_rows($retval) > 0) {
    while($row = mysqli_fetch_assoc($retval)) {
        echo "Book Id: {$row['book_id']}<br />"."Book Title: {$row['book_title']}<br />".
        "Price: {$row['price']}<br />"."Author Id: {$row['author_id']}<br />"."Author Name: {$row['author_name']}<br />"
        ."Publication: {$row['publication']}<br />";
    }
}

mysqli_close($conn);

?>