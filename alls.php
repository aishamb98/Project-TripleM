<!DOCTYPE html>
<html dir="rtl" lang="ar">
    <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="userProfile.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fontawesome-iconpicker/3.2.0/js/fontawesome-iconpicker.min.js" integrity="sha512-7dlzSK4Ulfm85ypS8/ya0xLf3NpXiML3s6HTLu4qDq7WiJWtLLyrXb9putdP3/1umwTmzIvhuu9EW7gHYSVtCQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://kit.fontawesome.com/7e1530c475.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="alls.css">    
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
                </ul>
            </nav>
        </header>

        <div class="mainPage" style="position: sticky;">
            <div class="sideBar" style="position: fixed;">
                <h2 class="choices">قائمة الاختيارات</h2>
                
                    <h3 class="sideChoices">الخدمات</h3>
                        <ul>
                         <li><a href="addService.html" style="text-decoration: none;"><i class="fas fa-plus"></i>إضافة خدمة</a></li>
                         <li><a href="alls.php" style="text-decoration: none;"><i class="fas fa-list"></i>جميع الخدمات</a></li>
                        </ul>
                    <h3 class="sideChoices">الإعلانات</h3>
                    <ul>
                        <li><a href="addAD.html" style="text-decoration: none;"><i class="fas fa-plus"></i>إضافة إعلان</a></li>
                        <li><a href="allAD.php" style="text-decoration: none;"><i class="fas fa-list"></i>جميع الإعلانات</a></li>
                    </ul>
                    <h3 class="sideChoices">التقارير</h3>
                    <ul>
                        <li><a href="reports.php" style="text-decoration: none;"><i class="fas fa-chart-line"></i>عرض التقارير</a></li>
                    </ul>
                    <h3 class="sideChoices">أخرى</h3>
                    <ul>
                        <li><a href="logout.php" style="text-decoration: none;"><i class="fas fa-sign-out-alt"></i>تسجيل خروج</a></li>
                    </ul>
            </div>
            

            <section class="court-list">
        <?php
        session_start();
            $connection2 = mysqli_connect("localhost", "root", "", "tripleem");
            // Check connection
            if($connection2 === false){
            die("ERROR: Could not connect. " 
            . mysqli_connect_error());
            }
            $invemail = $_SESSION['mail'];
            $sql = "SELECT * from court WHERE investor_email = '$invemail' ;" ;

            $result2 = $connection2-> query($sql);

           if ($result2-> num_rows > 0){
                while ($row = $result2-> fetch_assoc()) { 
              ?>
                <div class="container" style="margin-right: 300px;">
                    <div class="card">
<?php//image display code?> <!-- <img src=" <?php // echo"", $row['picture']; ?>" class="card-img-top" alt=" Images"> -->
                            <div class="card-name">  ملعب  <?php echo $row['name']; ?> </div> 
                            <?php $row['name'] = $_SESSION['courtName'];?>
                            <div class="card-photo"><img src="bahta.png"></div>
                            <div class="card-sport_type"> نوع الملعب: <?php echo $row['sport_type']; ?> </div> 
                            
                            <div class="card-space"> مساحة الملعب: <?php echo $row['space']; ?> </div> 
                            <div class="card-category"> تصنيف الملعب: <?php echo $row['category']; ?> </div> 
                            <div class="card-contact_number">رقم التواصل: <?php echo $row['contact_number']; ?> </div> 
                            <div class="card-location">موقع الملعب: <?php echo $row['location']; ?> </div> 
                            <br>
                            <div class="card-price">SAR <?php echo $row['price']; ?> </div> 
                        
                    </div>
                 </div>
                    <?php
                
                }
           
           
            } ?>


               <?php 

           
           
        ?>

        </div>
        </section>  
    </body>

</html>
        
        
        

  
   

   