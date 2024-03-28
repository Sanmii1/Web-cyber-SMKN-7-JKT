<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet" />
    <link rel="shortcut icon" href="web-icon.png" type="image/x-icon" />
    <link rel="stylesheet" href="../style/style.css" />
    <link rel="stylesheet" href="../style/animation.css" />
  </head>
  <body>
    <div class="form-container-parent">
      <form action="" method="post" class="form-container shadow-drop-2-center">
        <h2 class="form-title">Login</h2>
        <label for="username" data="username" class="label-username">Username : </label>
        <br />
        <input type="text" required name="username" />
        <br />
        <label for="Password" class="label-username" data="password">Password :</label>
        <br />
        <input type="password" name="password" id="password" required />
        <br>
        <span class="par-login">Belum punya Akun?<a href="../index.php">Register</a></span>
        <button type="submit" class="btn-kirim" name="login">Kirim</button>
      </form>
    </div>
  </body>
</html>

<?php 
if(isset($_POST['login'])){
require '../proses/connection.php';
$username = $_POST['username'];
$password = $_POST['password'];

$query_sql = "SELECT * FROM `list-user` WHERE username = '$username' AND password = '$password'";

$result = mysqli_query($conn,$query_sql);
if(mysqli_num_rows($result) > 0){
    header('Location: user.php');
} else {
  echo "<script>alert('Password salah');</script>";
}
}
?>