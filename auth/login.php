<?php 
    require '../config/config.php';

    if(isset($_POST['btnlogin'])) {
      $username = $_POST['username']; ;
      $email = $_POST['email'];
      $password = $_POST['password'];

      $ceklogin = mysqli_query($koneksi, "SELECT * FROM tbl_user WHERE username = '$username' AND password='$password'");

      if(mysqli_num_rows($ceklogin) == 1){
        $_SESSION['username'] = $username;
        echo "<center><div class='alert alert-success'>Login Berhasil</div></center>";
        echo "<meta http-equiv='refresh' content='1;url=../home/page.php'";
      } else {
        echo "<center><div class='alert alert-danger'>Login Gagal</div></center>";
        echo "<meta http-equiv='refresh' content='1;url=../index.php'";
      }
    }
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Template Login Dan Register</title>
    <style>
      * {
        font-family: Georgia, 'Times New Roman', Times, serif;
      }
    </style>
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
<!-- Container  -->
<div class="container">

  <!-- Form Login-->
<form class="row justify-content-center" method="post">
  <div class="col-md-6">
  <div class="mb-3 text-center">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" name="username">
    <div class="username" class="form-text">Maximum 12-20 Character</div>
  </div>
    <div class="mb-3 text-center">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">Gunakan Email yang aktif</div>
    </div>
  <div class="mb-3 text-center">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password">
  </div>
  <button type="submit" name="btnlogin" class="btn btn-primary position-absolute top-5 start-50 translate-middle mt-3">Submit</button>
</div>
  
</form>
<!-- End Form -->

</div>
<!-- End Container -->
  </body>

  <!-- Script Js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</html>