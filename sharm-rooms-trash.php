<?php
include 'basic.php';
$sql = "SELECT * FROM sharm WHERE active=0";
$data = mysqli_query($conn, $sql);
if(isset($_GET["id"])){
  sharm_restore($_GET["id"]);
}
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Sharm Hotel</title>
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/styles.css">
     <link rel="stylesheet" href="big-style.css">
     <script src="js/bootstrap.bundle.min.js" charset="utf-8"></script>
   </head>
   <body>
  <?php include 'navbar.php' ?>
  <div class="container">
    <div class="row">
      <h1 class="display-1">Heaven Hotel</h1>
      <h1> Sharm Branch </h1>
      <table class="table table-white table-bordered table-striped">
          <tr>
          <td>Room Number</td>
          <td>View</td>
          <td>Room Type</td>
          <td>Price</td>
          <td>Booked</td>

          </tr>
          <?php while($room = mysqli_fetch_assoc($data)) { ?>
          <tr>
          <!-- <td><img class="city-logo" src="img/cities/<?php echo $city["image"]; ?>"</td> -->
          <td><?php echo $room["room_number"]; ?></td>
          <td><?php echo $room["view"]; ?></td>
          <td><?php echo $room["room_type"]; ?></td>
          <td><?php echo $room["price"]; ?></td>


          <td>
    <a class="btn btn-primary" href="sharm-rooms-trash.php?id=<?php echo $room ["room_number"]; ?>">Restore</a>
          </td>
          </tr>
          <?php } ?>

        </table>
      </div>
    </div>

   </body>
 </html>
