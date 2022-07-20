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




            <div class="main-content">
              <?php
            $connection2 = mysqli_connect("localhost", "root", "", "tripleem");
            // Check connection
            if($connection2 === false){
            die("ERROR: Could not connect. " 
            . mysqli_connect_error());
            }

           // $invemail = $_SESSION['mail'];
            $sql = "SELECT * from advertisement;" ;

            $result2 = $connection2-> query($sql);

           /* if ($result2-> num_rows > 0){
                while ($row = $result2-> fetch_assoc()) { 
                ?>
                 <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
<?php//image display code?> <!-- <img src=" ",<?php // $row['picture']; ?> class="card-img-top" alt=" Images"> -->
                            <h2 class="card-title"> <?php echo $row['title']; ?> </h2> 
                            <p class="card-text" > 
                            <?php echo $row['description']; ?>    
                            </p>
                        </div>
                    </div>
                 </div>
                    <?php
                }
            
            }
            else*/?>
               <h2 style="font-size: 40px;color: rgba(169, 169, 169, 0.829);margin-top: 200px;margin-right 500px;">لا يوجد لديك أي إعلانات</h2>
               <?php/*}

      */  ?>

        </div>

    </body>

</html> 