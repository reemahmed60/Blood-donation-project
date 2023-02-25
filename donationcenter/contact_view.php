<?php //for contact form
include_once 'connect.php'; //connection class of the database

$insertdata = new connect2db();
if(isset($_POST['submit']))
{
$email=$_POST['email'];
$msg=$_POST['msg'];



$sql = $insertdata->insertcontact($email, $msg);
if($sql)
{
  echo "<script>
  alert('Thank you for contacting us, we will write back to you as soon as possible.');
  window.location.href = 'profile.php';
  </script>";
}
else
{

  echo "<script>
  alert('There was an error while sending your message, please try again..');
  window.location.href = 'contactus.php';
  </script>";

}
}
?>
