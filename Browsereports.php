<?php       
    include_once('reports.php');
?>

<!DOCTYPE html>
<html>

    <head>
        <title>التقارير</title>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
    </head>

    <body>
        <div class="container">
            <div class="wrapper">
                <h1>التقارير</h1>
            </div>
            <div class="data">
                <form action="reports.php" method="post">
                <select name="stadards">
                    <option>Select</option>   
<?php      
    $query1 = "SELECT * FROM reservation";
    $result1 = mysqli_query($query1);
    while($rows1 = )


?>

                    <option> سنوي </option>
                    <option> شهري </option>
                </select>

                <select name="نوع الملعب">
                    <option>Select</option>
                    <option>كرة القدم</option>
                    <option>كرة السلة</option>
                    <option>كرة الطائرة</option>
                    <option>تنس</option>
                </select>

                <input type="submit" name="submit" value="تطبيق" class="submit"/>
                <table border="1" class="table">

                    <tr>
                        <th>اسم الملعب</th>
                        <th>الحجوزات</th>
                    </tr>

                </table>
          
            </div>
        </div>  
    </body>
</html>