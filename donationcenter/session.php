<?php
if(!isset($_SESSION)){
session_start();}
include_once('connect.php');

  $user_check=$_SESSION['email'];
  $con = new connect2db;

  $ses_sql1=mysqli_query($con->connect(),"select * from appointments where email='$user_check'");
  if($ses_sql1){
  $row1=mysqli_fetch_array($ses_sql1,MYSQLI_ASSOC);
    // set the appointment session variables
    $dayt=$row1['date'];
    $time=$row1['time']."0PM";
    $loc=$row1['loc'];
    $doc=$row1['doc'];
}
else{
  // if user hadn't made an appointment yet..
  $dayt=" ";
  $time=" ";
  $loc=" ";
  $doc=NULL;
}


  // the personal information session variables
  $ses_sql=mysqli_query($con->connect(),"select fname, lname, phone, gender, address,
  dob, donor, id from users where email='$user_check'");
  $row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

  $lname=$row['lname'];
  $phone=$row['phone'];
  $gender=$row['gender'];
  $address=$row['address'];
  $dob=$row['dob'];
  $donor=$row['donor'];
  // fixed variables per session
  $loggedin_session=$row['fname'];
  $loggedin_id=$row['id'];

  $_SESSION['id'] = $row['id']; //to fetch the current user's id (for updating purposes)


  // setting the blood variable independently.
  $ses_sql2=mysqli_query($con->connect(),"select blood from appointments where email='$user_check'");
  $row2=mysqli_fetch_array($ses_sql2,MYSQLI_ASSOC);
  $blood=$row2['blood'];


 // if no active session, redirect to the unlogged homepage.
if(!isset($loggedin_session) || $loggedin_session==NULL) {
 header("Location: homeunlogged.html");
}
?>
