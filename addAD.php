<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "tripleem");
     
// Check connection
if($conn === false){
 die("ERROR: Could not connect. " 
    . mysqli_connect_error());
}
$invemail = $_SESSION['mail'];
$title = $_REQUEST['title'];
// $picture = $_REQUEST['addpicture'];
$descriptionAD = $_REQUEST['ADsubject'];


$sqlQ = "INSERT INTO advertisement VALUES ('$title', '$descriptionAD', '$invemail')";



if(mysqli_query($conn, $sqlQ)){

} else{
}

// Close connection
mysqli_close($conn);

include "Addedsuccessfully.html"

?>