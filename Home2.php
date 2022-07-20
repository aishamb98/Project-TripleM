<!-- <!DOCTYPE html> 
<html>
    <head>
        <meta charset="UTF-8"/>
    </head>
    <body>
        <header>
            <nav>
                <ul>
                    <li><a href="homePage.html">الرئيسية</a></li>
                    <li><a href="Home2.html">الملاعب</a></li>
                    <li><a href="FQA.html">الأسئلة الشائعة</a></li>
                    <li><a href="#contact">تواصل معانا</a></li>
                    <li>
                    <a href="cart.html">
                        <img src="shopping-cart.png" alt="سلة المشتريات">
                    </a>
                    </li>
                    <li><a href="#Breif">من نحن</a></li>
                    <li>
                    <a href="UserProflie.html">
                        <img src="تنزيل.png" alt="الملف التعريفي">
                    </a>
                    </li>
                </ul>
            </nav>
        </header>

        <section>
            
        </section>

        <footer>
            <p id="Breif">نحن منصة استثمارية للملاعب، تجمع بين صاحب الملعب و اللاعب بكل سهولة و يسر. تم إنشاء هذا الموقع من قِبل طالبات جامعة الملك عبدالعزيز باتحاد مع شركة المسار الثلاثي المحدودة.</p>
        </footer>
    </body>
</html>-->



<!DOCTYPE html>
<html dir="rtl">
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="courts.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fontawesome-iconpicker/3.2.0/js/fontawesome-iconpicker.min.js" integrity="sha512-7dlzSK4Ulfm85ypS8/ya0xLf3NpXiML3s6HTLu4qDq7WiJWtLLyrXb9putdP3/1umwTmzIvhuu9EW7gHYSVtCQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <title>منصة الملاعب الاستثمارية</title>
        <meta name="description" content="احجز لعبتك الآن بكل سهولة"/>
        <link rel="stylesheet" href="home2.css">
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


        <section class="court-list">
        <?php
        session_start();
            $connection2 = mysqli_connect("localhost", "root", "", "tripleem");
            // Check connection
            if($connection2 === false){
            die("ERROR: Could not connect. " 
            . mysqli_connect_error());
            }

            $sql = " SELECT * from court " ;
            $result2 = $connection2-> query($sql);

            if ($result2-> num_rows > 0){
                while ($row = $result2-> fetch_assoc()) { 
              ?>
                <div class="container">
                    <form action="calendar.php" class="card" method="GET">
<?php//image display code?> <!-- <img src=" <?php // echo"", $row['picture']; ?>" class="card-img-top" alt=" Images"> -->

                            <div class="card-name">  ملعب  <?php echo $row['name'];?> </div> 
                            <div class="card-photo"><img src="bahta.png"></div>
                            <div class="card-sport_type"> نوع الملعب: <?php echo $row['sport_type']; ?> </div> 
                            <div class="card-space"> مساحة الملعب: <?php echo $row['space']; ?> </div> 
                            <div class="card-category"> تصنيف الملعب: <?php echo $row['category']; ?> </div> 
                            <div class="card-contact_number">رقم التواصل: <?php echo $row['contact_number']; ?> </div> 
                            <div class="card-location">موقع الملعب: <?php echo $row['location']; ?> </div> 
                            <br>
                            <div class="card-price">SAR <?php echo $row['price']; ?> </div> 
                        <input type="submit" class="reserve-button" value="احجز" <?php $_SESSION['thecourt'] = $row['name']; ?>>
                    
                </form>
                 </div>
                    <?php
                


            
                }

                echo "</table>";
            }
            else{
                echo "0 result";
            }

           
           
        ?>

</section>
</body>
</html>