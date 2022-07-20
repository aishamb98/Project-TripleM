<?php
    session_start();
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "tripleem";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  

    $email = $_REQUEST['mail'];
    $password = $_REQUEST['pass'];
    $_SESSION['mail']=$email;

        //to prevent from mysqli injection  
        $email = stripcslashes($email);
        $password = stripcslashes($password);
        $email = mysqli_real_escape_string($con, $email);
        $password = mysqli_real_escape_string($con, $password);
      
        $sql = "select * from investors where email = '$email' and password = '$password'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
        $count = mysqli_num_rows($result);  
        
        if($count == 1){  
            //echo "<h1><center> Login successful </center></h1>";  
          

            
            $_SESSION['logged_in'] = true;
            // header('Location: /index.php');
            include('index.php');
            if(! empty($_SESSION['include'])){
             include('investor.html');
 
            }
        }  
        else{  
            echo "<h1> كلمة المرور أو الايميل خاطئة نرجوا منك إعادة تسجيل الدخول</h1>";
        }   

?>

<html>
    <form action="signInInv.html">
        <input type="submit" value="رجوع">
</html>