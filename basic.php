<?php
$conn = mysqli_connect('localhost', 'root', '', 'Hotel');
$app_name = "Hotel";
$logo = "logoo.png";
include 'functions/all.php';
include 'functions/new-functions.php';
session_start();
$su = "/Hotel/sign-in.php";
$si = "/Hotel/sign-up.php";
if($_SERVER["REQUEST_URI"] != $si && $_SERVER["REQUEST_URI"] != $su ){
  if(!isset($_SESSION["username"])){
    header("Location:sign-in.php");
  }
}
 ?>
