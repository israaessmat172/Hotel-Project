<?php
function customers_new($id,$name,$phone,$address,$email){
  global $conn;
  $sql ="INSERT INTO customers (id,name,phone,address,email)VALUES('$id','$name','$phone','$address','$email')";
  mysqli_query($conn,$sql);
  header("Location: customers-list.php");

}

// function customers_update($id,$name,$image,$phone,$address,$email,$bdate,$id_number, $id_image,$city_id){
//   global $conn;
//   if($image["name"]!="" || $id_number!=""){
//     $tmp_name=$image["tmp_name"];
//     $location="img/customers/";
//     $filename=strtolower($name);
//     $filename=str_replace(" ",'-',$filename);
//     $filename=$filename."-logo.png";
//       $fileid=strtolower($name);
//       $fileid=str_replace(" ","-",$fileid);
//       $fileid=$fileid."-id.png";
//       move_uploaded_file($tmp_id,$id_location.$fileid);
//     $sql ="UPDATE customers SET name='$name',image='$filename',phone='$phone',address='$address',email='$email',bdate='$bdate',id_number='$id_number',id_image='$fileid',city_id='$city_id' WHERE id='$id'";
// // }elseif ($id_image!="") {
// //   $sql ="UPDATE customers SET name='$name',phone='$phone',address='$address',email='$email',bdate='$bdate',id_number='$id_number',id_image='$id_image',city_id='$city_id' WHERE id='$id'";
// }else {
//   $sql ="UPDATE customers SET name='$name',phone='$phone',address='$address',email='$email',
//   bdate='$bdate',id_number='$id_number'city_id='$city_id' WHERE id='$id'";
// }
// mysqli_query($conn,$sql);
// header("Location: customers-list.php");
// }
 ?>
