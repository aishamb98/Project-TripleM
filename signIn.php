<?php

    // get values from signIn.html file
    $email = $_REQUEST['mail'];
    $password = $_REQUEST['pass'];
    $_SESSION['mail']=$_REQUEST['mail'];


    // to prevent mySQL injection
    $email = stripcslashes($email);
    $password = stripcslashes($password);
    $email = mysql_real_escape_string($email);
    $password = mysql_real_escape_string($password);

    // connect to the server and select database
    
    /*$conn = mysqli_connect("localhost", "root", "", "tripleem");
          
    // Check connection
    if($conn === false){
        die("ERROR: Could not connect. " 
            . mysqli_connect_error());
    }*/

    mysqli_connect("localhost","root","");
    mysql_select_db("tripleem");

    // Query the database for user
    $result = mysql_query("select * from accounts where email='$email' and password='$password'") 
                or die("Fail to query database".mysql_error);
    $row = mysql_fetch_array($result);

    if ($row['email'] == $email && $row['password'] == $password){
        $_SESSION['logged_in'] = true;
        header('Location: /index.php');
        echo "Login success!!! Welcome " $row['email'];
    
    }else {
        echo "Failed to login!";
    }


?>