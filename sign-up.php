<?php
include 'basic.php';
if(isset($_POST["username"])){
  $user = get_user($_POST["username"]);
  if(isset($user["username"])){
    echo "This username is already taken";
  }else{
      create_user($_POST["fullname"],$_POST["username"],$_POST["password"]);
  }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Create an Account - <?php echo $app_name; ?></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="big-style.css">
    <script src="js/bootstrap.bundle.min.js" charset="utf-8"></script>
  </head>
  <body>
    <div class="container">
      <h1 class="display-1 text-primary mt-5 mb-5">Create an Account </h1>
      <div class="row">
        <form action="sign-up.php" method="post">
          <div class="form-group">
            <label for="Fullname">FullName:</label>
            <input type="text" name="fullname" class="form-control">
          </div>
          <div class="form-group">
            <label for="Username">Username:</label>
            <input type="text" name="username" class="form-control">
          </div>
          <div class="form-group mb-3">
            <label for="Password">Password:</label>
            <input type="password" name="password" class="form-control">
          </div>
          <button type="submit" class="btn btn-primary">Create Account</button>
        </form>
        <p class="mt-5 text-center">Already Have an Account? Try to <a href="sign-in.php">Sign in</a></p>
        </div>
      </div>
   </body>
   </html>
