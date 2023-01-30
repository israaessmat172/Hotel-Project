<?php
function cairo_list($status = "active"){
  global $conn;
  if($status == "active"){

  $sql = "SELECT * FROM cairo WHERE active = 1";
} else{
  echo "it's unavaliable";

  }
  $data = mysqli_query($conn,$sql);
  return $data;

  }




 ?>
