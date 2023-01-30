<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img id="logo" src = "img/<?php echo $logo; ?>"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="index.php" role="button" >
            Home
          </a>


        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            cities
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="cairo-rooms-list.php">Cairo</a></li>
            <li><a class="dropdown-item" href="alex-rooms-list.php">Alex</a></li>
            <li><a class="dropdown-item" href="sharm-rooms-list.php">Sharm ELsheikh</a></li>
            <li><a class="dropdown-item" href="hurghada-rooms-list.php">Hurghada</a></li>
            <li><hr class="dropdown-divider"></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            rooms
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="cairo-rooms-trash.php">Reserved Cairo Rooms</a></li>
            <li><a class="dropdown-item" href="alex-rooms-trash.php">Reserved Alex Rooms</a></li>
            <li><a class="dropdown-item" href="sharm-rooms-trash.php">Reserved Sharm Rooms</a></li>
            <li><a class="dropdown-item" href="hurghada-rooms-trash.php">Reserved Hurghada Rooms</a></li>
            <li><hr class="dropdown-divider"></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            customers
          </a>
          <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="customers-new.php">New Customers</a></li>
            <li><a class="dropdown-item" href="customers-list.php">Customers List</a></li>
            <li><hr class="dropdown-divider"></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">

            employees
          </a>
          <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="employees-new.php">New Employees</a></li>
            <li><a class="dropdown-item" href="employees-list.php">Employees List</a></li>
            <li><hr class="dropdown-divider"></li>

          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            login
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="sign-in.php">Sign in</a></li>
            <li><a class="dropdown-item" href="sign-up.php">Sign up</a></li>
          </ul>
        </li>
      </ul>
      <a href="sign-out.php" class="btn btn-primary">Sign Out</a>
    </div>
  </div>
</nav>
