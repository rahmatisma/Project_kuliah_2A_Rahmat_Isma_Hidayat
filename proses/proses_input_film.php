<?php
include "connect.php";

$nama_film = (isset($_POST['nama_film'])) ? htmlentities($_POST['nama_film']) : "";
$jenis_film = (isset($_POST['jenis_film'])) ? htmlentities($_POST['jenis_film']) : "";
$produser = (isset($_POST['produser'])) ? htmlentities($_POST['produser']) : "";
$sutradara = (isset($_POST['sutradara'])) ? htmlentities($_POST['sutradara']) : "";
$penulis = (isset($_POST['penulis'])) ? htmlentities($_POST['penulis']) : "";
$produksi = (isset($_POST['produksi'])) ? htmlentities($_POST['produksi']) : "";
$durasi = (isset($_POST['durasi'])) ? htmlentities($_POST['durasi']) : "";
$trailer = (isset($_POST['trailer'])) ? htmlentities($_POST['trailer']) : "";
$casts = (isset($_POST['casts'])) ? htmlentities($_POST['casts']) : "";
$sinopsis = (isset($_POST['sinopsis'])) ? htmlentities($_POST['sinopsis']) : "";

$kode_rand = rand(10000, 99999)."-";
$target_dir = "../assets/img/film/".$kode_rand;
$target_file = $target_dir . basename($_FILES['foto']['name']);
$imageType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

if (!empty($_POST['input_film_validate'])) {
    // Cek apakah gambar atau bukan
    $cek = getimagesize($_FILES['foto']['tmp_name']);
    if ($cek == false) {
        $message = "Ini Bukan file gambar";
        $statusUpload = 0;
    } else {
        $statusUpload = 1;
        if(file_exists($target_file)) {
            $message = "Maaf, File yang Dimasukkan Telah ada";
            $statusUpload = 0;
        } else {
            if($_FILES['foto']['size'] > 500000) { //500kb
                $message = "File foto yang Dimasukkan terlalu besar";
                $statusUpload = 0;
            } else {
                if($imageType != "jpg" && $imageType != "png" && $imageType != "jpeg" && $imageType != "gif") {
                    $message = "Maaf, hanya diperbolehkan gambar yang memiliki format JPG, JPEG, PNG dan GIF";
                    $statusUpload = 0;
                }
            }
        }
    }

    if($statusUpload == 0) {
        $message = '<script>alert("'.$message.', Gambar tidak dapat diupload");
                    window.location="../Film"</script>';
    } else {
        $select = mysqli_query($conn, "SELECT * FROM tb_film WHERE nama_film = '$nama_film' ");
        if (mysqli_num_rows($select) > 0) {
            $message = '<script>alert("Nama Film yang dimasukkan telah ada");
                        window.location="../Film"</script>';
        } else {
            if (move_uploaded_file($_FILES['foto']['tmp_name'], $target_file)) {
                $query = mysqli_query($conn, "INSERT INTO tb_film (foto, nama_film, jenis_film, produser, sutradara, penulis, produksi, casts, durasi, trailer, sinopsis) VALUES ('".$kode_rand.$_FILES['foto']['name']."','$nama_film','$jenis_film','$produser','$sutradara','$penulis','$produksi','$casts','$durasi','$trailer','$sinopsis')");
                if ($query) {
                    $message = '<script>alert("Data berhasil dimasukkan");
                        window.location="../Film"</script>';
                } else {
                    $message = '<script>alert("Data gagal dimasukkan");
                        window.location="../Film"</script>';
                }
            } else {
                $message = '<script>alert("Maaf, Terjadi Kesalahan File Tidak Dapat di Upload");
                        window.location="../Film"</script>';
            }
        }
    }
}
echo $message;
?>
