<?php
session_start();
include_once "session.php";
// small code to set the session variable donor to Yes.
    $donor = "Yes";

    $obj = new connect2db;
		$result=mysqli_query($obj->connect(),"UPDATE users
     SET donor = '".$donor."'
     WHERE id = '$loggedin_id'; ");

    if($result){
      echo "<script>
      alert('You are now an eligible donor');
      window.location.href = 'home.php';
      </script>";
    }
    else {
      echo "<script>
      alert('An error occured, please try again..');
      window.location.href = 'survey.php';
      </script>";
    }


?>
