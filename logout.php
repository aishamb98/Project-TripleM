<?php
session_start();
session_destroy();
//echo '<h3>لقد تم تسجيل خروجك بنجاح</h3>';
?>

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
                <p>لقد تم تسجيل خروجك بنجاح</p>
            </nav>
        </header>
        
    
    <footer>
        <br>
        <form action="homePage.html">
            <input class="bot" type="submit" value="الرجوع للصفحة الرئيسية">
    </footer>
        </section>
    </body>
</html>