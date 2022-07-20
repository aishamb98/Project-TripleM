<?php

    session_start();
    $conn = mysqli_connect("localhost", "root", "", "tripleem");
          
    // Check connection
    if($conn === false){
     die("ERROR: Could not connect. " 
        . mysqli_connect_error());
    }

    $name = $_REQUEST['name'];
    $sportType = $_REQUEST['StadiumType'];
    $category = $_REQUEST['Categories'];
    $price = $_REQUEST['price'];
    $picture = $_REQUEST['picture'];
    $space = $_REQUEST['PlaygroundArea'];
    $location = $_REQUEST['location'];
    $contact = $_REQUEST['contact'];
    $invemail = $_SESSION['mail'];

    
    $sql = "INSERT INTO court (name,investor_email,sport_type,category,price,picture,space,location,contact_number,rate) VALUES ('$name', '$invemail', '$sportType', '$category', '$price', '$picture', '$space', '$location', '$contact', '5')";
    

    if(mysqli_query($conn, $sql)){
       
    } else{
    }
    
    // Close connection
    mysqli_close($conn);

    include "Addedsuccessfully.html"

?>









