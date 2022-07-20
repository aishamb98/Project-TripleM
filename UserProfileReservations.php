<!DOCTYPE html>
<html dir="rtl" lang="ar">
    <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="userProfile.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fontawesome-iconpicker/3.2.0/js/fontawesome-iconpicker.min.js" integrity="sha512-7dlzSK4Ulfm85ypS8/ya0xLf3NpXiML3s6HTLu4qDq7WiJWtLLyrXb9putdP3/1umwTmzIvhuu9EW7gHYSVtCQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://kit.fontawesome.com/7e1530c475.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <header>
            <nav>
                <h3 class="logo">منصة الملاعب الاستثمارية</h3>
                <ul>
                    <li><a href="homePage.html">الرئيسية</a></li>
                    <li><a href="Home2.php">الملاعب</a></li>
                    <li><a href="homePage.html">الأسئلة الشائعة</a></li>
                    <li><a href="homePage.html">من نحن</a></li>
                    <li><a href="homePage.html">تواصل معنا</a></li>
                    <li>
                        </li>
                    <li>
                        <!-- <form action="signIn.html"> 
                            <input type="submit" value="تسجيل دخول">-->

                            <form action="UserProflie.html">
                                <input type="submit" value="الملف التعريفي">
                    </li>
                </ul>
            </nav>
        </header>

        <div class="mainPage" style="position: sticky;">
            <div class="sideBar" style="position: fixed;">
                <h2 class="choices">قائمة الاختيارات</h2>
                <ul>
                    <li><a href="UserProfileReservations.php" style="text-decoration: none;"><i class="far fa-calendar-alt"></i>حجوزاتي</a></li>
                    <li><a href="logout.php" style="text-decoration: none;"><i class="fas fa-sign-out-alt"></i>تسجيل خروج</a></li>
                </ul>
            </div>
            <div class="main-content">
                    <?php
                        session_start();

                        $conn = mysqli_connect("localhost", "root", "", "tripleem");
                        
                        // Check connection
                        if($conn === false){
                            die("ERROR: Could not connect. " 
                                . mysqli_connect_error());
                        }
                    
                        
                        // Performing insert query executionS
                        $emailend = $_SESSION['emailend'];
                        $sql = "SELECT * from bookings WHERE email = '$emailend' ;" ;


                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                ?>
                                <div style="">
                                    
                                <h2>           التاريخ:     <?php echo $row["date"];?>    -              الوقت:     <?php echo $row["timeslot"];?>    -              اسم الملعب:     <?php echo $row["court"];?></h2>
                               <br><br>
                                </div>



                                <?php

                            }
                        } else {
                            echo "لا يوجد حجوزات";
                        }
                        
                        
                        // Close connection
                        mysqli_close($conn);

                    ?>
            </div>
        </div>
        
    </body>
</html>

