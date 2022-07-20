<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    </head>

    <body>
        <header>
            <nav>
                <ul>
                    <li><a href="homePage.html">الرئيسية</a></li>
                    <li><a href="Home2.php">الملاعب</a></li>
                    <li><a href="homePage.html">الأسئلة الشائعة</a></li>
                    <li><a href="homePage.html">من نحن</a></li>
                    <li><a href="homePage.html">تواصل معنا</a></li>

                </ul>
            </nav>
        </header>
        
        <section>


        













            <?php
            session_start();

            $conn = mysqli_connect("localhost", "root", "", "tripleem");
            
            if($conn === false){
                die("ERROR: Could not connect. " 
                    . mysqli_connect_error());
            }
            
    
            $court_name = $_REQUEST['court_name'];
            $contact = $_REQUEST['contact'];
            $username = $_REQUEST['username'];

              
            $sql = "INSERT INTO reservation VALUES ('$phone', '$email','$age', '$gender', '$password', '$username')";
    
            if(mysqli_query($conn, $sql)){
                
            } else{
                echo "ERROR: Hush! Sorry $sql. " 
                    . mysqli_error($conn);
            }
              
            mysqli_close($conn);
            ?>
        </section>
        
        <footer>
            <p id="Breif">نحن منصة استثمارية للملاعب، تجمع بين صاحب الملعب و اللاعب بكل سهولة و يسر. تم إنشاء هذا الموقع من قِبل طالبات جامعة الملك عبدالعزيز باتحاد مع شركة المسار الثلاثي المحدودة.</p>
        </footer>
    </body>
</html>