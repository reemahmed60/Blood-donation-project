

      <?php
      include 'connect.php';
$insertdata = new connect2db();
if(isset($_POST['submit']))
{
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $phone=$_POST['phone'];
  $gender=$_POST['gender'];
  $address=$_POST['address'];
  $dob=$_POST['dob'];

	$to_email = "$email";
	$subject = "Welcome to YGH - Registration Email";
	$body = "Thank You $fname For Registration. Your Registerd Email $email and Password $password";
	$headers = "From: donoron91@gmail.com";

	if (mail($to_email, $subject, $body, $headers)) {
	    echo "Email successfully sent to $to_email...";
	} else {
	    echo "Email sending failed...";
	}

$sql = $insertdata->insert_tables($fname, $lname, $email, $password, $phone, $gender, $address, $dob);
if($sql)
{
  echo "<script>
  alert('Successfully signed up. please log in to continue');
  window.location.href = 'welcome.php';
  </script>";
}
else
{
  echo "<script>
  alert('An Error Occured, please try again..');
  window.location.href = 'welcome.php';
  </script>";

}
}

?>
