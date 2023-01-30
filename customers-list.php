<?php
include 'basic.php';
$sql = "SELECT * FROM customers";
$data = mysqli_query($conn, $sql);
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Customers List - <?php echo $app_name ?></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="big-style.css">
    <script src="js/bootstrap.bundle.min.js" charset="utf-8"></script>

</head>

<body>
    <?php include 'navbar.php' ?>
    <div class="container">
        <div class="row">
            <h1 class="display-1">Customers List</h1>
            <a class="btn btn-dark mt-5 " href="customers-new">New Customer</a>
            <table class="table table-white table-bordered table-striped ">
                <tr>

                    <td><b>ID</b></td>
                    <td><b>Name</b></td>
                    <td><b>Phone</b></td>
                    <td><b>Address</b></td>
                    <td><b>Email</b></td>

                </tr>
                <?php while ($customer= mysqli_fetch_assoc($data)) {?>
                <tr>
                    <td><?php echo $customer["id"]; ?></td>
                    <td><?php echo $customer["name"]; ?></td>
                    <td><?php echo $customer["phone"]; ?></td>
                    <td><?php echo $customer["address"]; ?></td>
                    <td><?php echo $customer["email"]; ?></td>

                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</body>

</html>
