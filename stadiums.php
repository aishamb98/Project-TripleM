<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8 ">
       
    </head>
   
    <body>
        <a href="homePage.html" title=" Go to home page "> الصفحة الرئيسية </a>
        
        <br>
        <h1> الملاعب </h1>

        <br>


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
                 <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
<?php//image display code?> <!-- <img src=" <?php // echo"", $row['picture']; ?>" class="card-img-top" alt=" Images"> -->
                            <h2 class="card-title"> <?php echo $row['name']; ?> </h2> 
                            <h4 class="card-title"> <?php echo $row['sport_type']; ?> </h3> 
                            <h4 class="card-title"> <?php echo $row['price']; ?> </h3> 
                            <h4 class="card-title"> <?php echo $row['space']; ?> </h3> 
                            <h4 class="card-title"> <?php echo $row['category']; ?> </h3> 
                            <h4 class="card-title"> <?php echo $row['contact_number']; ?> </h3> 
                            <h4 class="card-title"> <?php echo $row['location']; ?> </h3> 
                            <p  class="card-text" > 
                                <?php echo $row['description']; ?>    
                            </p>
                        </div>
                        <form action="calendar.php">
                            <?php $_SESSION['courtName'] = $row['name']; ?>
                        <input type="submit" value="احجز">
                        </form>
                    </div>
                </div>
                    <?php
                
            
                }

                echo "</table>";
            }
            else{
                echo "0 result";
            }

           
           
        ?>
        
    </body>

</html>
        
        
        

  
   

   