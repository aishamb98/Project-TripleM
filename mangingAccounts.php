<!DOCTYPE html> 
<html>
    <head>
        <meta charset="UTF-8">
    </head>

    <body>
        <h2>المستخدمين</h2>
    </body>
<html>


<?php
session_start();

        $conn = mysqli_connect("localhost", "root", "", "tripleem");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        // Taking all values from the form data(input)

        /*$password = $_REQUEST['mailNew'];
		$email = $_REQUEST['passNew'];
        $type = "player";
        $username = $_REQUEST['usernameNew'];
		$phone = $_REQUEST['phoneNew'];
		$age = $_REQUEST['age'];
        $gender = $_REQUEST['gender'];*/
	
          
        // Performing insert query executionS
        $sql = "SELECT * FROM end_user";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "اسم المستخدم: " . $row["username"];
                echo str_repeat('&nbsp;', 5);
                echo "الإيميل: " . $row["email"];
                echo str_repeat('&nbsp;', 5);
                echo $row["gender"]."           :الجنس";
                echo str_repeat('&nbsp;', 5);
                echo $row["age"]."           :العمر";
                echo str_repeat('&nbsp;', 5);
                echo $row["phone_number"]."           :رقم الجوال"."<br>";
            }
        } else {
            echo "0 results";
        }
        
          
        // Close connection
        mysqli_close($conn);

?>




<html>
    <body>
        <h2>المستثمرين</h2>
    </body>
<html>





<?php

        $conn = mysqli_connect("localhost", "root", "", "tripleem");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        // Taking all values from the form data(input)

        /*$password = $_REQUEST['mailNew'];
		$email = $_REQUEST['passNew'];
        $type = "player";
        $username = $_REQUEST['usernameNew'];
		$phone = $_REQUEST['phoneNew'];
		$age = $_REQUEST['age'];
        $gender = $_REQUEST['gender'];*/
	
          
        // Performing insert query executionS
        $sql = "SELECT * FROM investors";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "اسم المستخدم: " . $row["username"];
                echo str_repeat('&nbsp;', 5);
                echo "الإيميل: " . $row["email"];
                echo str_repeat('&nbsp;', 5);
                echo $row["gender"]."           :الجنس";
                echo str_repeat('&nbsp;', 5);
                echo $row["age"]."           :العمر";
                echo str_repeat('&nbsp;', 5);
                echo $row["contact_num"]."           :رقم التواصل";
                echo str_repeat('&nbsp;', 5);
                echo $row["office_address"]."           :العنوان";
                echo "<br>";
            }
        } else {
            echo "0 results";
        }
        
          
        // Close connection
        mysqli_close($conn);

?>




<html>
    <body>
   
         <form action="mangerProfileInfo.html">
             <input type="submit" value="الرجوع">
                 
    </body>
<html>

