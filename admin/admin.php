<?php 
    require '../config/config.php';
    $user = query("SELECT * FROM tbl_user");


    // Search Key
    if(isset($_POST['search'])) {
      $user = search($_POST['key']);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Admin</title>
</head>
<br>
<nav class="navbar navbar-light bg-light container">
  <div class="container-fluid">
    <form class="d-flex" method="post" action="">
      <input class="form-control me-5" name="key" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" name="search" type="submit">Search</button>
    </form>
  </div>
</nav>
<br><br><br>
<body>
    <div class="container">
        <h1 class="text-center ms-auto">Admin Data</h1>
        <br>
        <a href="../index.php" class="btn btn-success position-absolute top-5 start-50 translate-middle">Back TO Home</a>
        <br>
<table class="table mt-3" style="background-color: teal; color: white;">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Aksi</th>
      <th scope="col">Username</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
    </tr>
  </thead>
  <?php $i = 1; ?>
  <?php foreach ($user as $row) : ?>
  <tbody>
    <tr>
      <th><?= $i; ?></th>
      <th style="background-color: teal; color:white;text-decoration:none;">
          <a href="user-delete.php?id=<?= $row['id']; ?>">Delete</a></th>
      <td><?= $row['username']; ?></td>
      <td><?= $row['name']; ?></td>
      <td><?= $row['email']; ?></td>
      <td><?= $row['password']; ?></td>
    </tr>
  </tbody>
  <?php $i++; ?>
  <?php endforeach; ?>
</table>
    </div>
</body>
</html>