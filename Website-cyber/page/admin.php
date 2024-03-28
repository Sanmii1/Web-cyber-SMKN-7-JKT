<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../style/admin.css" />
    <link rel="stylesheet" href="../style/style.css" />
  </head>
  <body>
    <nav>
      <h2 class="h2-admin-title">Selamat Datang di Dashboard Admin</h2>
    </nav>
    <div class="form-container-parent">
      <div class="form-admin">
        <h1 class="h1-user">Selamat Datang</h1>
        <p class="p-user">Anda telah memasuki dashboard Admin</p>
        <button class="btn-kirim" id="myButton">keluar</button>
      </div>
    </div>
    <script>
      document.getElementById("myButton").addEventListener("click", function () {
        window.location.href = "login.php";
      });
    </script>
  </body>
</html>
<?php 

?>