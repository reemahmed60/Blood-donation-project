<?php
include_once 'connect.php'; //connection class of the database
$update = new connect2db();
if(isset($_POST['submit']))
{
	$email=$_POST['email'];
	$blood=$_POST['blood'];

  $sql = $update->update_appt($email, $blood);

  if($sql)
  {
  header("Location: receipt.php");
  }

  else
  {
		echo "<script>
		alert('An error occured, please try again');
		window.location.href = 'donor.php';
		</script>";  }
}
?>
