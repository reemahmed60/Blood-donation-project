<?php
session_start();
include_once "session.php";

  if($donor == "No"){
    echo "<script>
    alert('Please sign up as a donor first.');
    window.location.href = 'survey.php';
    </script>";

    }
  else {

    if(!$doc == NULL){
      echo "<script>
      alert('You have already made one appointment, you cannot donate blood again before 60 days.');
      window.location.href = 'profile.php';
      </script>";

      }
    else {
      header("Location: appointment.php");
    }
  }

?>
