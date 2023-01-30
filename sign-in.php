<?php
include 'basic.php';
if(isset($_POST["username"])){
  $user = get_user($_POST["username"]);
  if(isset($user["username"])){
  if(password_verify($_POST["password"], $user["password"])){
    $_SESSION["username"] = $user["username"];
      header("Location: index.php");
  } else {
    echo "Your typed an Incorrect Password";
  }
  }else{
    echo "This username doesn't exist";
  }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Log in to your Account - <?php echo $app_name; ?></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="big-style.css">
    <script src="js/bootstrap.bundle.min.js" charset="utf-8"></script>
  </head>
  <body>
    <div class="container">
      <h1 class="display-1 text-primary mt-5 mb-5">Log in to your Account </h1>
      <div class="row">
        <form action="sign-in.php" method="post">
          <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" name="username" class="form-control">
          </div>
          <div class="form-group mb-3">
            <label for="Password">Password:</label>
            <input type="password" name="password" class="form-control">
          </div>
          <button type="submit" class="btn btn-primary">Log in</button>
        </form>
        <p class="mt-5 text-center">Don't Have an Account? <a href="sign-up.php">Create one</a></p>
        </div>
      </div>
   </body>
   </html>
