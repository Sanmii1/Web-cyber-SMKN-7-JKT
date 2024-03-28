<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komentar</title>
    <link rel="shortcut icon" href="web-icon.png" type="image/x-icon" />
    <link rel="stylesheet" href="../style/style.css" />
    <link rel="stylesheet" href="../style/animation.css" />
    <link rel="stylesheet" href="../style/style2.css">
</head>
<body>
    <div class="form-container-parent">
        <div class="form-container-2 shadow-drop-2-center">
            <form method="get" class="komentar-form">
                <textarea name="komentar" id="" cols="100" rows="10" class="kmn-cont" placeholder="Silahkan Masukkan script"></textarea>
                <br>
                <button type="submit" class="btn-kmn" name="btn-komen">Kirim</button>
                <input type="hidden" name="delete_id" id="delete_id" value="">
                <button type="submit" class="btn-kmn" name="btn-delete">delete</button>
                <button type="button" class="btn-kmn" id="myButton">Balik</button>
            </form>
            <div id="komentar-section">
                <?php 
                    require '../proses/connection.php';
                if ($conn->connect_error) {
                    die("Koneksi database gagal: " . $conn->connect_error);
                }

                if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["btn-komen"])) {
                    $komentar = $_GET["komentar"];
                    
                    $sql = "INSERT INTO `data-komentar` (komentar) VALUES ('$komentar')";
                    if ($conn->query($sql) === TRUE) {
                        // Menampilkan komentar baru yang dimasukkan
                        echo "<div class='komentar'>" . $komentar . "</div>";
                        echo "<script>alert('Komentar berhasil ditambahkan.');</script>";
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                }
                // Menampilkan komentar dari database
                $sql = "SELECT * FROM `data-komentar` ORDER BY id DESC LIMIT 1";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<div class='komentar'>" . $row["komentar"] . "</div>";
                    }
                } else {
                    echo "Belum ada komentar.";
                }
                $conn->close();
                    ?>                
            </div>
        </div>
    </div>
    <script>
      document.getElementById("myButton").addEventListener("click", function () {
        window.location.href = "user.php";
      });
    </script>
</body>
</html>