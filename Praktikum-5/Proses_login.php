<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $username=$_POST["username"];
        $password=$_POST["password"];

        $conn = mysqli_connect ("localhost","root","","db_saya") or die("Koneksi gagal");
        $hasil1 = mysqli_query($conn, "select * from login where Username");
        $hasil2 = mysqli_query($conn, "select * from login where Password");
        $row1 = mysqli_fetch_array($hasil1);
        $row2 = mysqli_fetch_array($hasil2);
    
        if ($username==$row1 && $password==$row2) {
            echo "Login Berhasil";
        } else {
            echo "Login Gagal";
        }
    ?>
</body>
</html>