<?php
session_start();

if(isset($_SESSION['email'])) {
 $_SESSION["email"] = "";
 unset($_SESSION["id"]);
 header("Location: homeunlogged.html");
}
?>
