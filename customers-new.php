<?php
include 'basic.php';
if (isset($_POST["name"])) {
  customers_new($_POST["id"],$_POST["name"],$_POST["phone"],$_POST["address"],$_POST["email"]);
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>New Customer - <?php echo $app_name ?></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="big-style.css">
    <script src="js/bootstrap.bundle.min.js" charset="utf-8"></script>


</head>

<body>
    <?php include 'navbar.php' ?>
    <div class="container">
        <div class="row">
            <h1 class="display-1">New Customer</h1>
            <form action="customers-new.php" method="post" enctype="multipart/form-data">
                <div class="form-group mb-4">
                    <label for="id">ID</label>
                    <input class="form-control" type="text" name="id">
                </div>
                <div class="form-group mb-4">
                    <label for="name">Name</label>
                    <input class="form-control" type="text" name="name">
                </div>
                <div class="form-group mb-4">
                    <label for="phone">Phone</label>
                    <input class="form-control" type="text" name="phone">
                </div>
                <div class="form-group mb-4">
                    <label for="address">Address</label>
                    <input class="form-control" type="text" name="address">
                </div>
                <div class="form-group mb-4">
                    <label for="email">Email</label>
                    <input class="form-control" type="email" name="email">
                </div>

                <button class="btn btn-success" type="submit" name="button">Save</button>
                <a class="btn btn-secondary" href="customers-list.php">Back</a>
            </form>
        </div>
    </div>

</body>

</html>
