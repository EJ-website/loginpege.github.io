<?php
include 'config.php';


if (isset($_POST['submit'])) {
  $nama = $_POST['name'];
  $email = $_POST['email'];
  $password =  ($_POST['password']);


  $sql = "SELECT * FROM akubukaphp WHERE email='$email'";
  $result = mysqli_query($conn, $sql);
  if (!$result->num_rows > 0) {
    $sql = "INSERT INTO akubukaphp
      VALUES('', '$nama', '$email', '$password')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
      header('location:../sign-up/index.php');
    } else {
      echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
    }
  } else {
    echo "<script>alert('Woops! Email sudah Terdaftar.')</script>";
  }
}
?>



<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
  <script src="../assets/js/color-modes.js"></script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.115.4">
  <title>Register</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">



  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="register.css" rel="stylesheet">
</head>

<body class="d-flex align-items-center py-4 bg-body-tertiary">
  <main class="form-signin w-100 m-auto">
    <form method="post" action="">
      <img class="mb-3" style="margin-inline: 108px;" src="tutel.png" width="100" height="100" alt="">

      <div class="form-floating">
        <input type="text" class="form-control" id="floatingName" name="name" placeholder="yourname">
        <label for="floatingName">Your Name</label>
      </div>
      <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>

      <div class=" my-4" style="padding-inline: 50px;">
        <h5 style="font-size: 0.9rem;">
          Already have account? <a style="text-decoration: none;" href="../sign-up/index.php">Sign in</a>
        </h5>
      </div>
      <button class="btn btn-secondary w-100 py-2" type="submit" name="submit">Sign up</button>
      <p class="mt-5 mb-3 text-body-secondary">&copy; 2023–2025</p>
    </form>
  </main>
  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>