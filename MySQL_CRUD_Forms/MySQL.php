<?php include 'conn.php';?>

<?php 
     
    if($_POST) {
        //* get data from the form
        
        if(empty($_POST['uname'])) {
            echo "Name is required";
            return false;
        } else {
            $name = $_POST['uname'];
            if(!preg_match("/^[a-zA-Z ]*$/", $name)) {
                echo "Name should contain only characters";
                return false;
            }
        }

        if(empty($_POST['email'])) {
            echo "Email is required";
            return false;
        } else {
            $email = $_POST['email'];
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "Not a valid Email";
                return false;
            }
        }

        if(strlen($_POST['mobile']) != 10) {
            echo "Mobile number should have ten digits";
            return false;
        } else {
            $phone = $_POST['mobile'];
            if(!preg_match("/^[0-9]*$/", $phone)) {
                echo "Mobile number can only contain digits";
                return false;
            }
        }

        //* Prepared Statements (Safe way) for inserting data
        $insert_data_query = "INSERT INTO test_table(uname, email, phone) VALUES (?,?,?)";
        $stmt = mysqli_prepare($conn, $insert_data_query);
        mysqli_stmt_bind_param($stmt, "ssi", $name, $email, $phone);
        if(mysqli_stmt_execute($stmt)) {
            "Inserted Data Successfully";
        } else {
            echo "No Record Entered".mysqli_error($conn);
            return false;
        }

        //* Easy Way for inserting data
        /* $insert_data_query = "INSERT INTO test_table(uname, email, phone) VALUES ('$name', '$email', '$phone')";
        if(mysqli_query($conn, $insert_data_query)) {
            "Inserted Data Successfully";
        } else {
            echo "No Record Entered".mysqli_error($conn);
            return;
        } */ 
    }
 
    //* retrieving records
    $get_record_query = "SELECT * FROM test_table";
    $retval = mysqli_query($conn, $get_record_query);
 
    if(mysqli_num_rows($retval) > 0) {
        while($row = mysqli_fetch_assoc($retval)) {
            echo "ID: {$row['id']}"."<br />"
            ."Name: {$row['uname']}"."<br />"
            ."Email: {$row['email']}"."<br />"
            ."Mobile: {$row['phone']}"."<br />"
            ."<br />";
        }
    }
 
    //* closing connection
    mysqli_close($conn);
 
?>