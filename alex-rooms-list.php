<?php
include 'basic.php';
$sql = "SELECT * FROM alex WHERE active=1";
$data = mysqli_query($conn, $sql);

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Alex Hotel</title>
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
      <h1> Alex Branch </h1>
      <table class="table table-white table-bordered table-striped">
          <tr>
          <td>Room Number</td>
            <td>View</td>
          <td>Room Type</td>
          <td>Price</td>
          <td>Reservation</td>
          </tr>
          <?php while($room = mysqli_fetch_assoc($data)) { ?>
          <tr>
          <td><?php echo $room["room_number"]; ?></td>
          <td><?php echo $room["view"]; ?></td>
          <td><?php echo $room["room_type"]; ?></td>
          <td><?php echo $room["price"]; ?></td>

          <td>
    <a class="btn btn-primary" href="alex-reserve.php?id=<?php echo $room ["room_number"]; ?>">Book Now</a>
          </td>
          </tr>
          <?php } ?>

        </table>
      </div>
    </div>

   </body>
 </html>
