<?php 
    require '../config/config.php';
   
?>
<head>
    <!-- Connect Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- Style -->
    <style>
        .text {
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
    </style>
</head>
<!-- Container -->
<nav class="navbar navbar-expand-lg navbar-dark mb-4" style="background-color:#654ea3;">
  <div class="container">
    <a class="navbar-brand" href="../index.php">Hi Web</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../auth/login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../auth/register.php">Register</a>
        </li>
        <li class="nav-item">
          <a href="../admin/admin.php" class="nav-link">Data User</a>
        </li>
    </ul>
      <form action="" method="post" class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" autocomplete="off">
        <button class="btn btn-outline-success" style="background-color: thistle; color:black;" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<!-- Setiap ganti user, ganti juga usernamenya -->
<div class="text"><h4> Welcome 
<?php 
if(isset($_SESSION['username'])) {
    echo $_SESSION['username'];
    echo "<br><br>";
    echo '<a href="../auth/logout.php" class="btn btn-danger position-absolute top-5 start-50 translate-middle">Logout</a></div>';
}else {
    echo "Anda Hanya Seorang Tamu, Harap Login Terlebih Dahulu Atau Daftar ";
    echo "<br><br>";
    echo '<a href="../index.php" class="btn btn-danger position-absolute top-5 start-50">Login</a>';
}

?>
</h4>

