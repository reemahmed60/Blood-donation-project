<?php
session_start();
include_once 'session.php';
include_once 'connect.php';
$appt = new connect2db;

if(isset($_POST['submit'])) {
$email=$_SESSION['email'];
$dayt = $_POST['dayt'];
$time = $_POST['time']."0PM";
$id = $loggedin_id;
$obj = mysqli_query($appt->connect(),"SELECT location from times where id = 1;");
$row = $obj->fetch_row();
$loc = $row[0] ?? false;

$update = $appt->appt($dayt, $time, $loc, $id);

$to_email = "$email";
$subject = "Welcome to Donation Center - Appointment Details ";
$body = "Thank You $loggedin_session For Booking. Your Appointment date will be on $dayt and time will be at $time ";
$headers = "From: donoron91@gmail.com";
if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}

if ($update) {

  echo "<script>
  alert('Appointment Successfully Booked!');
  window.location.href = 'profile.php';
  </script>"; }

 else {
// update Failed
echo '<script> alert("Appointment Booking Unsuccessful") </script>';
}

}

?>
