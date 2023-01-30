<?php
function employees_new($id,$name,$phone,$address,$email,$salary){
  global $conn;
  $sql ="INSERT INTO employee (id,name,phone,address,email,salary)VALUES('$id','$name','$phone','$address','$email','$salary')";
  mysqli_query($conn,$sql);
  header("Location: employees-list.php");

}

 ?>
