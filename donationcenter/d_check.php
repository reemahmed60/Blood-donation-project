<?php
session_start();
include_once "session.php";

  if($donor == "No"){
    header("Location: survey.php");
    }
  else {
    echo "<script>
    alert('You are already registered as an eligible donor.');
    window.location.href = 'profile.php';
    </script>";
  }

?>
