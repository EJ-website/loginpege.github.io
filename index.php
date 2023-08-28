<?php
session_start();
require '../sign-up/config.php';

if (isset($_POST['submit'])) {
  $username = $_POST["username"];
  $password = ($_POST["password"]);

  $result = mysqli_query($conn, "SELECT * FROM akubukaphp WHERE username = '$username' AND password = '$password'");

  //cek username
  if (mysqli_num_rows($result) === 1) {
    $_SESSION['username'] = $_POST['username'];
    header('location: dashboard.php');
  } else {
    echo "<script>alert('Password Salah! Silahkan coba kembali.')</script>";
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
  <title>Login</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">



  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">


  <!-- Custom styles for this template -->
  <link href="../sign-up/login.css" rel="stylesheet">
</head>

<body class="d-flex align-items-center py-4 bg-body-tertiary">
  <main class="form-signin w-100 m-auto">
    <form method="post" action="">
      <img class="mb-3" style="margin-inline: 108px;" src="tutel.png" width="100" height="100" alt="">

      <div class="form-floating">
        <input type="text" name="username" class="form-control" id="floatingInput" placeholder="username">
        <label for="floatingInput">Your Name</label>
      </div>
      <div class="form-floating">
        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>

      <div class=" my-4" style="padding-inline: 40px;">
        <h5 style="font-size: 0.9rem;">
          Dont have an account? <a style="text-decoration: none;" href="../sign-up/register.php">Sign up</a>
        </h5>
      </div>
      <button class="btn btn-secondary w-100 py-2" type="submit" name="submit">Sign in</button>
      <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2023</p>
    </form>
  </main>
  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>