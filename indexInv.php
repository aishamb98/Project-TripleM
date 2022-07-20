<?php
session_start();

        $conn = mysqli_connect("localhost", "root", "", "tripleem");
        
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
        
        // Taking all values from the form data(input)

        $password = $_REQUEST['mailNew'];
		$email = $_REQUEST['passNew'];
        $type = "Investor";
        $username = $_REQUEST['usernameInv'];
		$contact = $_REQUEST['contactInv'];
		$age = $_REQUEST['ageInv'];
        $gender = $_REQUEST['genderEndUser'];
        $address = $_REQUEST['officeAddress'];
          
        // Performing insert query executionS
        $sql = "INSERT INTO investors (contact_num, email,age, gender, password, username) VALUES ('$contact', '$email','$age', '$gender', '$password', '$username')";

        if(mysqli_query($conn, $sql)){
            include("investor.html");
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);

?>

