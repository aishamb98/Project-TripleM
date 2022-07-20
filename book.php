<html>
<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "tripleem");
        
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " 
        . mysqli_connect_error());
}


if(isset($_GET['date'])){
    $date = $_GET['date'];
    $stmt = $conn->prepare("select * from bookings where date = ?");
    $stmt->bind_param('s', $date);
    $bookings = array();
    if($stmt->execute()){
        $result = $stmt->get_result();
        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){
                $bookings[] = $row['timeslot'];
            }
            
            $stmt->close();
        }
    }
}

if(isset($_REQUEST['submit'])){
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $timeslot = $_REQUEST['timeslot'];
    $courtb = $_REQUEST['nameOfCourt'];

    $stmt = $conn->prepare("select * from bookings where date = ? AND timeslot = ?");
    $stmt->bind_param('ss', $date , $timeslot);
    if($stmt->execute()){
        $result = $stmt->get_result();
        if($result->num_rows>0){

            $msg = "<div class='alert alert-danger'>محجوز</div>";

        }else{
            $sql = "INSERT INTO bookings (name, timeslot, email, date, court) VALUES ('$name','$timeslot','$email','$date', '$courtb')";

            if(mysqli_query($conn, $sql)){
                    
            } else{
                echo "ERROR: Hush! Sorry $sql. " 
                    . mysqli_error($conn);
            }
            
                    
            $msg = "<div class='alert alert-success'>تم الحجز بنجاح</div>";
            $bookings[] = $timeslot;

           // Close connection
            mysqli_close($conn);

        }?>
        <form action="homePage.html">
        <input type="submit" value="رجوع">
    </form>
    <?php  }

}


$duration = 60;
$cleanup = 0;
$start = "09:00";
$end = "22:00";

function timeslots($duration,$cleanup,$start,$end){
    $start = new DateTime($start);
    $end = new DateTime($end);
    $interval = new DateInterval("PT".$duration."M");
    $cleanupInterval = new DateInterval("PT".$cleanup."M");
    $slots = array();
    
    for($intStart = $start; $intStart<$end; $intStart->add($interval)->add($cleanupInterval)){
        $endPeriod = clone $intStart;
        $endPeriod->add($interval);
        if($endPeriod>$end){
            break;
        }
        
        $slots[] = $intStart->format("H:iA")." - ". $endPeriod->format("H:iA");
        
    }
    
    return $slots;

}
?>

<!doctype html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/main.css">
  </head>

  <body>
    <div class="container">
        <h1 class="text-center"><?php echo date('F d,Y', strtotime($date));?> :المواعيد المتوفرة للحجز بتاريخ</h1><hr>
        <div class="row">
            <div class="col-md-12">
        <?php echo(isset($msg))?$msg:""; ?>
    </div>
        <?php $timeslots = timeslots($duration, $cleanup, $start, $end); 
            foreach($timeslots as $ts){
        ?>
        <div class="col-md-2">
            <div class="form-group">
            <?php if(in_array($ts, $bookings)){ ?>
            <button class="btn btn-danger" ><?php echo $ts; ?></button>
            <?php }else{?>
            <button class="btn btn-success book" data-timeslot="<?php echo $ts; ?>"><?php echo $ts; ?></button>
            
            <?php }?>
            

            </div>
        </div>
        <?php } ?>
        </div>
    </div>

    <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
      <h4 class="modal-title"> :فضلًا قم بتعبئة البيانات الخاصة بك</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button> 
        <!-- <h4 class="modal-title">Booking: <span id="slot"></span></h4> -->
      </div>
      <div class="modal-body">
       <div class="row">
           <div class="col-md-12">
               <form action="" method="post">
                   <div class="form-group">
                       <label for="">الوقت</label>
                       <input required type="text" readonly name="timeslot" id="timeslot" class="form-control">
                   </div>
                   <div class="form-group">
                       <label for="">الاسم</label>
                       <input required type="text" name="name" class="form-control">
                   </div>
                   <div class="form-group">
                       <label for="">الإيميل</label>
                       <input required type="email" name="email" class="form-control">
                   </div>
                   <div class="form-group">
                       <label for="">اسم الملعب المراد حجزه</label>
                       <input required type="text" name="nameOfCourt" class="form-control">
                   </div>
                   <div class="form-group pull-right">
                       <button class="btn btn-primary" type="submit" name="submit">حجز</button>
                   </div>
               </form>
           </div>
       </div>
      </div>

    </div>

  </div>
</div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script>
    $(".book").click(function(){
    var timeslot = $(this).attr('data-timeslot');
    $("#slot").html(timeslot);
    $("#timeslot").val(timeslot);
    $("#myModal").modal("show");
});
    </script>
</body>

</html>
</html>