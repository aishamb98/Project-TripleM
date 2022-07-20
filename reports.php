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

    <body>
       
         <?php 
            $con = mysqli_connect("localhost", "root", "", "tripleem");
            
        ?>

    </body>


</html>