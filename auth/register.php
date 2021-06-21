<?php 
  require '../config/config.php';

  if(isset($_POST['btnregister'])) {
    $username = strtolower(stripslashes(htmlspecialchars($_POST['username'])));
    $name = stripslashes(htmlspecialchars($_POST['name']));
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $password1 = htmlspecialchars($_POST['password1']);

    if($password == $password1) {
      mysqli_query($koneksi,"INSERT INTO tbl_user VALUES ('','$username','$name','$password1','$email')");
      echo "<center><div class='alert alert-success'>Register Berhasil, Silahkan Login</div></center>";
      echo "<meta http-equiv='refresh' content'1.5;url=/login.php'";
    } elseif($password !== $password1 ) {
      echo "<center><div class='alert alert-danger'>Password Salah</div></center>";
      echo "<meta http-equiv='refresh' content'1;url=register.php'";
    }
  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./scss/register.scss">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Register</title>
</head>
<body>
      <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark mb-4" style="background-color:#654ea3;">
  <div class="container">
    <a class="navbar-brand" href="../index.php">Hi Web</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../home/page.php">Home</a>
        </li>

        <!-- Dropdown Login Register -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Account
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="login.php">Login</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="register.php">Register</a></li>
          </ul>
        </li>
      <!-- Dropdown End -->
        
        <li class="nav-item">
          <a href="../admin/admin.php" class="nav-link">Data User</a>
        </li>
    </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" style="background-color: thistle; color:black;" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>


<!-- Form -->
<form method="post" class="row justify-content-center">
  <div class="col-md-6">
    <div class="mb-3 text-center">
        <label for="username" class="form-labelUsername">Username</label>
        <input type="username" name="username" class="form-control" id="username1" aria-describedby="usernameHelp">
        <div id="usernameHelp" class="form-text">Minimal 8-20 Karakter</div>
    </div>
    <div class="mb-3 text-center">
        <label for="name" class="form-label">Name</label>
        <input type="name" name="name" class="form-control" id="exampleInputname1">
        <div class="form-text">Gunakan nama yang jelas</div>
    </div>
    <div class="mb-3 text-center">
      <label for="email" class="form-label">Email</label>
      <input type="email" name="email" class="form-control">
      <div class="form-text">Email yang aktif</div>
    </div>
    <div class="mb-3 text-center">
        <label for="password" class="form-label">Password</label>
        <input type="password"  class="form-control" name="password">
        <div class="form-text">Gunakan Password yang jelas</div>
    </div>
    <div class="mb-3 text-center">
        <label for="Password1" class="form-label">Konfirmasi Password</label>
        <input type="password" name="password1" class="form-control" name="password1">
    </div>
    
    <!-- Btn submit -->
    <div class="position-relative">
        <button type="submit" name="btnregister" class="btn btn-primary position-absolute top-5 start-50 translate-middle mt-3">Submit</button>
          <br><br><br><br><br>
        <button type="reset" class="btn btn-danger position-absolute top-50 start-50 translate-middle">Reset</button>
          </div>
    </div>  

</form>
<!-- End Form -->
</body>

 <!-- Script Js -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</html>