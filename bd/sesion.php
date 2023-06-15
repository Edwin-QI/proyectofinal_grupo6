<?php
  session_start();
  $email = $_SESSION['username'];
  if(!isset($email)){
    header("location: index.php");
  }
  ?>