<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet" />
    <link rel="shortcut icon" href="web-icon.png" type="image/x-icon" />
    <link rel="stylesheet" href="style/style.css" />
    <link rel="stylesheet" href="style/animation.css" />
    <link rel="stylesheet" href="style/style2.css">
  </head>
  <body>
    <div class="form-container-parent">
      <form action="" method="get" class="form-container shadow-drop-2-center">
        <h2 class="form-title">Register</h2>
        <label for="username" data="username" class="label-username">Username : </label>
        <br />
        <input type="text" required name="username" />
        <br />
        <label for="Password" class="label-username" data="password">Password :</label>
        <br />
        <input type="password" name="password" id="password" required />
        <br>
        <span class="par-register">Sudah punya akun?<a href="page/login.php">Login</a></span>
        <button type="submit" class="btn-kirim" name="register">Kirim</button>
      </form>
    </div>
  </body>
</html>
<?php 
include 'proses/connection.php';

if (isset($_GET['register'])) {
  if (isset($_GET['username']) && isset($_GET['password'])) { // Periksa keberadaan kunci array
      $username = $_GET['username'];
      $password = $_GET['password'];
      $id = $_GET['id'];

      $check_username_query = mysqli_query($conn, "SELECT COUNT(*) AS total FROM `list-user` WHERE username = '$username'");
      $check_username_data = mysqli_fetch_assoc($check_username_query);
      if ($check_username_data['total'] > 0) {
          echo "<script>alert('Username sudah digunakan');</script>";
          exit(); // Keluar dari skrip PHP
      }

      $query = "INSERT INTO `list-user` SET id = '$id', username = '$username', password = '$password'";
      $result = mysqli_query($conn, $query);
      header('Location: page/login.php');
  } else {
      echo "Username atau password tidak ditemukan.";
  }
}

?>
