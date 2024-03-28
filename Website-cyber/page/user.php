<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>User Dashboard</title>
    <link rel="stylesheet" href="../style/admin.css" />
    <link rel="stylesheet" href="../style/style.css" />
    <link rel="stylesheet" href="../style/style2.css">
  </head>
  <body>
    <nav>
      <h2 class="h2-admin-title">Selamat datang di Sanmi</h2>
    </nav>
    <div class="form-container-parent">
      <div class="form-admin">
        <h1 class="h1-user">Selamat Datang</h1>
        <p class="p-user">Anda telah memasuki dashboard User</p>
        <button class="btn-kirim  btn-user" id="myButton">keluar</button>
        <br>
        <p><a href="komentar.php">Komentar</a></p>
      </div>
    </div>
    <?php 
    ?>
    <script>
      document.getElementById("myButton").addEventListener("click", function () {
        window.location.href = "login.php";
      });
    </script>
  </body>
</html>
<?php 
 require '../proses/connection.php';
 if (isset($_GET['btn-kmn'])){
 $komentar = $_GET['komentar'];
 $query = "INSERT INTO `data-komentar` VALUES('$komentar')";
 mysqli_query($conn, $query);
 echo "<script>alert('Terima kasih sudah komen');</script>";
}
?>