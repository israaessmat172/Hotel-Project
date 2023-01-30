<?php
include 'basic.php';

$id =$_GET["id"];
if(isset($_POST["name"])){
  sharm_reserve($_POST['name'],$_POST['phone'],$_POST['check_in'], $_POST['check_out'],$_POST['number_of_days'],$_POST['id']);
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>reservation - <?php echo $app_name; ?></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="big-style.css">
    <script src="js/bootstrap.bundle.min.js" charset="utf-8"></script>
  </head>
  <body>
    <?php include 'navbar.php' ?>
    <div class="container">
      <h1 class="display-1 text-primary mt-5 mb-5">Reservation </h1>
      <div class="row">
        <form action="sharm-reserve.php" method="post">
          <div class="form-group">
            <label for="name">Name:</label>

            <input type="hidden" name="id" class="form-control" value="<?php echo $id ?>">
            <input type="text" name="name" class="form-control">
          </div>
          <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="text" name="phone" class="form-control">
          </div>
          <div class="form-group mb-3">
            <label for="check_in">Check In:</label>
            <input type="date" name="check_in" class="form-control">
          </div>
          <div class="form-group mb-3">
            <label for="check_out">Check out:</label>
            <input type="date" name="check_out" class="form-control">
          </div>

          <div class="form-group mb-3">
            <label for="days_of_stay">Days Of Stay:</label>
            <input type="text" name="days_of_stay" class="form-control">
          </div>

          <button type="submit" class="btn btn-primary" href="sharm-reserve.php">Done</button>
        </form>
        </div>
      </div>
   </body>
   </html>
