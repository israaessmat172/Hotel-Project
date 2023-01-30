<?php
include 'basic.php';
$sql = "SELECT * FROM cities";
$data = mysqli_query($conn, $sql);

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Cities List</title>
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/styles.css">
     <script src="js/bootstrap.bundle.min.js" charset="utf-8"></script>
   </head>
   <body>
  <?php include 'navbar.php' ?>
  <div class="container">
    <div class="row">
      <h1 class="display-1">Cities List</h1>
      <table class="table table-dark table-bordered table-striped">
          <tr>
          <td>ID</td>
          <td>Name</td>
          <td>Actions</td>
          </tr>
          <?php while($city = mysqli_fetch_assoc($data)) { ?>
          <tr>
          <!-- <td><img class="city-logo" src="img/cities/<?php echo $city["image"]; ?>"</td> -->
          <td><?php echo $city["id"]; ?></td>
          <td><?php echo $city["name"]; ?></td>

          <td>
           <a class="btn btn-primary" href="cairo-rooms-list.php?id=<?php echo $city ["id"]; ?>">Click Here</a>
          </td>
          </tr>
          <?php } ?>

        </table>
      </div>
    </div>

   </body>
 </html>
