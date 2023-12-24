<?php
include "connect.php";
$nama_theater  = (isset($_POST['nama_theater'])) ? htmlentities($_POST['nama_theater']) : "";
$kota = (isset($_POST['kota'])) ? htmlentities($_POST['kota']) : "";
$nohp = (isset($_POST['nohp'])) ? htmlentities($_POST['nohp']) : "";
$harga_weekday = (isset($_POST['harga_weekday'])) ? htmlentities($_POST['harga_weekday']) : "";
$harga_weekend = (isset($_POST['harga_weekend'])) ? htmlentities($_POST['harga_weekend']) : "";
$alamat = (isset($_POST['alamat'])) ? htmlentities($_POST['alamat']) : "";
$kelas = (isset($_POST['class'])) ? htmlentities($_POST['class']) : "";

if (!empty($_POST['input_theater_validate'])) {
    $select = mysqli_query($conn, "SELECT * FROM tb_theaters WHERE nama_theater = '$nama_theater'");
    if (mysqli_num_rows($select) > 0) {
        $message = '<script>alert("Theater yang dimasukkan telah ada");
                        window.location="../Theater"</script>';
    } else {
        $query = mysqli_query($conn, "INSERT INTO tb_theaters (kota,nama_theater,alamat,nohp,harga_weekend,harga_weekday,kelas) VALUES ('$kota','$nama_theater','$alamat','$nohp','$harga_weekend','$harga_weekday','$kelas')");
        if ($query) {
            $message = '<script>alert("Data berhasil dimasukan");
                        window.location="../Theater"</script>';
        } else {
            $message = '<script>alert("Data gagal dimasukan")</script>';
        }
    }
}
echo $message;
