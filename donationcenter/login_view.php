<?php  //view for login
session_start();
include_once 'session.php';
include_once 'connect.php';
$user = new connect2db;

if(isset($_POST['submit'])) {
$emailusername = $_POST['email'];
$password = $_POST['password'];

$login = $user->chk_login($emailusername,$password);

if ($login) {
	$_SESSION['email']=$emailusername;
if( $emailusername=='jqader.15@gmail.com'|| $emailusername=='admin'){
// Registration Success
	# code...

header("location: admin_home.php");
 }
else{
header("location:profile.php");
 }

}
 else {
// Registration Failed
    echo "<script>
    alert('There was an error logging you in. please try again');
    window.location.href = 'login.html';
    </script>";

 }    }


?>
