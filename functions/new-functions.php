<?php
function reserve_new($name, $phone, $ci, $co, $dos, $room_number){
 global $conn;

  $sql = "INSERT INTO reserve (name, phone, check_in, check_out, days_of_stay) VALUES ('$name', '$phone', '$ci', '$co', '$dos')";
  mysqli_query($conn,$sql);
  $sql = "UPDATE cairo SET active='0' WHERE room_number ='$room_number'";
  mysqli_query($conn,$sql);
  header("Location:cairo-rooms-trash.php");
}

function reserve_restore($room_number){
 global $conn;
  $sql = "UPDATE cairo SET active='1' WHERE room_number ='$room_number'";
  mysqli_query($conn,$sql);
  header("Location:cairo-rooms-list.php");
}

function alex_reserve($name, $phone, $ci, $co, $dos, $room_number){
 global $conn;

  $sql = "INSERT INTO reserve (name, phone, check_in, check_out, days_of_stay) VALUES ('$name', '$phone', '$ci', '$co', '$dos')";
  mysqli_query($conn,$sql);
  $sql = "UPDATE alex SET active='0' WHERE room_number ='$room_number'";
  mysqli_query($conn,$sql);
  header("Location:alex-rooms-trash.php");
}

function alex_restore($room_number){
 global $conn;
  $sql = "UPDATE alex SET active='1' WHERE room_number ='$room_number'";
  mysqli_query($conn,$sql);
  header("Location:alex-rooms-trash.php");
}

function sharm_reserve($name, $phone, $ci, $co, $dos, $room_number){
 global $conn;

  $sql = "INSERT INTO reserve (name, phone, check_in, check_out, days_of_stay) VALUES ('$name', '$phone', '$ci', '$co', '$dos')";
  mysqli_query($conn,$sql);
  $sql = "UPDATE sharm SET active='0' WHERE room_number ='$room_number'";
  mysqli_query($conn,$sql);
  header("Location:sharm-rooms-trash.php");
}

function sharm_restore($room_number){
 global $conn;
  $sql = "UPDATE sharm SET active='1' WHERE room_number ='$room_number'";
  mysqli_query($conn,$sql);
  header("Location:sharm-rooms-list.php");
}

function hurghada_reserve($name, $phone, $ci, $co, $dos, $room_number){
 global $conn;

  $sql = "INSERT INTO reserve (name, phone, check_in, check_out, days_of_stay) VALUES ('$name', '$phone', '$ci', '$co', '$dos')";
  mysqli_query($conn,$sql);
  $sql = "UPDATE hurghada SET active='0' WHERE room_number ='$room_number'";
  mysqli_query($conn,$sql);
  header("Location:hurghada-rooms-trash.php");
}

function hurghada_restore($room_number){
 global $conn;
  $sql = "UPDATE hurghada SET active='1' WHERE room_number ='$room_number'";
  mysqli_query($conn,$sql);
  header("Location:hurghada-rooms-trash.php");
}
 ?>
