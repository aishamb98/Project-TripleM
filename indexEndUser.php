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
        $type = "player";
        $username = $_REQUEST['usernameNew'];
		$phone = $_REQUEST['phoneNew'];
		$age = $_REQUEST['age'];
        $gender = $_REQUEST['genderEndUser'];
	
          
        // Performing insert query executionS
        $sql = "INSERT INTO end_user (phone_number, email,age, gender, password, username) VALUES ('$phone', '$email','$age', '$gender', '$password', '$username')";
        

        if(mysqli_query($conn, $sql)){
            include("userProflie.html");
            
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);

?>

