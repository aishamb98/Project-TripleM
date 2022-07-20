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
      
        //to prevent from mysqli injection  
        $email = stripcslashes($email);  
        $password = stripcslashes($password);  
        $email = mysqli_real_escape_string($con, $email);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select * from manager where email = '$email' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            //echo "<h1><center> Login successful </center></h1>";  
            //include('Home2.html');
           $_SESSION['logged_in'] = true;
           // header('Location: /index.php');
           include('index.php');
           if(! empty($_SESSION['include'])){
            include('mangerProfileInfo.html');

           }

        }  
        else{  ?> 
                    <!DOCTYPE html>
                     <html dir="rtl">
                     <head>
                        <meta charset="UTF-8"/>
                        <link rel="stylesheet" href="success.css" />
                    </head>

                <body>
                    <header>
                        <nav>
                            <img src="logo.png" >
                            <h3 class="logo">منصة الملاعب الاستثمارية</h3>
                            <p>كلمة المرور أو الايميل خاطئة نرجوا منك إعادة تسجيل الدخول</p>
                        </nav>
                    </header>
                    
                
                <footer>
                    <br>
                    <form action="signInManager.html">
                        <input class="bot" type="submit" value="رجوع">
                    </form>
                </footer>
                    </section>
                </body>
            </html>
       <?php }   


?>

