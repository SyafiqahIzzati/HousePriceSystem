<?php
 session_start();
 if (!isset($_SESSION['user'])) {
  header("Location: signin.php");
 } else if(isset($_SESSION['user'])!="") {
  header("Location: signin.php");//nanti tukar kepada signin.php bila apply kpd system
 }
 
 if (isset($_GET['logout'])) {
  unset($_SESSION['user']);
  session_unset();
  session_destroy();
  header("Location: signin.php");
  exit;
 }