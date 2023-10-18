<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    
    <?php
    $negara=$_POST["negara"];
    $conn = mysqli_connect ("localhost","root","","db_saya") or die("Koneksi gagal");
    $hasil = mysqli_query($conn, "select * from Liga");
    $row = mysqli_fetch_array($hasil);

        if($negara==$row["negara"]) {
            echo "Negara yang anda cari ada";
        } else {
            echo "negara yang anda cari tidak ada";
        }

    ?>

</body>

</html>