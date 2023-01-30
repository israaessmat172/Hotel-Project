<?php
include 'basic.php';
$sql = "SELECT * FROM employee";
$data = mysqli_query($conn, $sql);
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Employees List - <?php echo $app_name ?></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="big-style.css">
    <script src="js/bootstrap.bundle.min.js" charset="utf-8"></script>

</head>

<body>
    <?php include 'navbar.php' ?>
    <div class="container">
        <div class="row">
            <h1 class="display-1">Employees List</h1>
            <a class="btn btn-dark mt-5 " href="employees-new">New Employee</a>
            <table class="table table-white table-bordered table-striped ">
                <tr>

                    <td><b>ID</b></td>
                    <td><b>Name</b></td>
                    <td><b>Phone</b></td>
                    <td><b>Address</b></td>
                    <td><b>Email</b></td>
                    <td><b>Salary</b></td>

                </tr>
                <?php while ($customer= mysqli_fetch_assoc($data)) {?>
                <tr>
                    <td><?php echo $customer["id"]; ?></td>
                    <td><?php echo $customer["name"]; ?></td>
                    <td><?php echo $customer["phone"]; ?></td>
                    <td><?php echo $customer["address"]; ?></td>
                    <td><?php echo $customer["email"]; ?></td>
                    <td><?php echo $customer["salary"]; ?></td>

                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</body>

</html>
