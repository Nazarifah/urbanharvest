<?php

    session_start();

    require("../connect.php");

    if(isset($_SESSION['email'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $tel = $_POST['tel'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $role = 3;

        if(isset($_POST['role'])){
            $role = $_POST['role'];
        }

        $sql = "INSERT INTO user (firstName, lastName, email, contactNo, 
            homeAddress, status, password, roleID) VALUES ('" . $fname . 
            "', '" . $lname . "', '" . $email . "', '" . $tel . "', '" . 
            $address . "', '" . 0 . "', '" . $password . "', '" . $role . "')" or
            die("Error inserting new record");

        if($conn->query($sql) == TRUE){
            $retrieveQuestion = "SELECT * FROM question WHERE status = 1";
            $result = $conn->query($retrieveQuestion);

            if($result == TRUE){
                echo "<meta http-equiv=\"refresh\" content=\"1;URL=security.php\">";
            }
            else{
                echo "Error: " . $result . "<br>" . $conn->error;
                echo "<meta http-equiv=\"refresh\" content=\"3;URL=register.html\">";
            }
            
        }
        else{
            echo "Error: " . $sql . "<br>" . $conn->error;
            echo "<meta http-equiv=\"refresh\" content=\"3;URL=register.html\">";
        }

    }
    else{
        echo "Login required";
        echo "<meta http-equiv=\"refresh\" content=\"3;URL=login.html\">";
    }
    
    $conn->close();
?>