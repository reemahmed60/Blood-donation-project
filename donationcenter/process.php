<?php
session_start();
include_once 'session.php';

// This PHP script will only run on post back from submit
if(isset($_POST['submit'])){
    if(!empty($_POST['question'])){
        // loop to retrieve checked values
        foreach($_POST['question'] as $selected){
            if($selected == "red//yes"){
              header("location:donor.php"); //proceed!

            } else {
              //otherwise..
                echo "<script>
                alert('You are not eligible to be a donor, redirecting you to your profile page.');
                window.location.href = 'profile.php';
                </script>";

            }
        }
    }
}
?>
