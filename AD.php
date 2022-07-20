<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8 ">
    </head>

    <body>
        <a href="homePage.html" title=" Go to home page "> الصفحة الرئيسية </a>
       
        <br>
        <h1> جميع الإعلانات</h1>

        <br>

              <?php
            $connection2 = mysqli_connect("localhost", "root", "", "tripleem");
            // Check connection
            if($connection2 === false){
            die("ERROR: Could not connect. " 
            . mysqli_connect_error());
            }

            $sql = " SELECT * from advertisement WHERE id.advertisement = id.investor " ; 
            $result2 = $connection2-> query($sql);

            if ($result2-> num_rows > 0){
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
            else{
                echo "0 result";
            }

        ?>


            </table>   
    </body>

</html>