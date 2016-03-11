<?php
include '../dbConnection.php';
error_reporting(E_ALL);
ini_set("display_errors",1);
session_start();

//storing form data and parasing its value
//for preventing SQL injection.
$name = mysqli_real_escape_string($con, $_POST['name']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$relation = mysqli_real_escape_string($con, $_POST['relation']);
$Feedback = mysqli_real_escape_string($con, $_POST['feedback']);
$id=uniqid();
if($_SESSION['lastSiteId']  == 'spambot' 
   && $_SESSION['lastSiteRequest'] + 5 < time()){

  $q=mysqli_query($con,"INSERT INTO testimonial VALUES ('$id','$name','$email','$relation','$Feedback')")or die('error');
    header("Location:http://localhost/sunnytiwari.com/add_testimonial/?q=For writing testimonial and your testimonial will appear soon on my website !.");
}else{
  //header("Location:http://localhost/sunnytiwari.com/add_testimonial/");
}