<?php
include 'basic.php';
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dashboard - <?php echo $app_name; ?></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/bootstrap.bundle.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="big-style.css">
  </head>
  <body>
    <?php include 'navbar.php' ?>
    <h1 style="text-align:center"> Welcome To Heaven Hotel </h1>
    <div class="container">
      <div class="row">
        <span class"col"></span>
      <div class="card col" style="width: 18rem;">
  <img class="card-img-top" src="img/cairohotel.jpg" alt="Card image cap" style="margin:auto;width:300px;" >
  <div class="card-body">
    <h5 class="card-title">Cairo Branch</h5>
    <p class="card-text">Welcome to our Hotel</p>
    <p class="card-text">Can't Wait to See You</p>
    <a href="cairo-rooms-list" class="btn btn-primary">Go To Hotel</a>
  </div>
</div>
  <div class="card col" style="width: 18rem;">
  <img class="card-img-top" src="img/alexhotel.jpg" alt="Card image cap" style="margin:auto;width:300px;">
  <div class="card-body">
  <h5 class="card-title">Alex Branch</h5>
  <p class="card-text">Welcome to our Hotel</p>
  <p class="card-text">Can't Wait to See You</p>
  <a href="alex-rooms-list" class="btn btn-primary">Go To Hotel</a>
  </div>
</div>
  <div class="card col" style="width: 18rem;">
<img class="card-img-top" src="img/sharmhotel.jfif" alt="Card image cap"style="margin:auto;width:300px;">
<div class="card-body">
<h5 class="card-title">Sharm Branch</h5>
<p class="card-text">Welcome to our Hotel</p>
<p class="card-text">Can't Wait to See You</p>
<a href="sharm-rooms-list" class="btn btn-primary">Go To Hotel</a>
</div>
</div>
<div class="card col" style="width: 18rem;">
<img class="card-img-top" src="img/hurghadahotel.webp" alt="Card image cap" style="margin:auto;width:300px;">
<div class="card-body">
<h5 class="card-title">Hurghada Branch</h5>
<p class="card-text">Welcome to our Hotel</p>
<p class="card-text">Can't Wait to See You</p>
<a href="hurghada-rooms-list" class="btn btn-primary">Go To Hotel</a>
</div>
</div>
<span class"col"></span>
</div>

</div>



  </body>
</html>
