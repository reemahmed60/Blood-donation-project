<?php
session_start();
include_once 'session.php';
include_once 'connect.php';
$user = new connect2db;

if(isset($_POST['submit'])) {
$email = $_POST['email'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$fname = $_POST['fname'];
$address = $_POST['address'];
$id = $loggedin_id;

$update = $user->update_profile($email,$fname,$phone,$password, $address, $id);

if ($update) {
$_SESSION['email']=$email;
header("location:profile.php");
 }

 else {
// update Failed
echo "<script>
alert('Could not update profile, please try again');
window.location.href = 'profile.php';
</script>";
}

}

?>
