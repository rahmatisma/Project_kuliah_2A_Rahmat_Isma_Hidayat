<?php
include "connect.php";

$theater = (isset($_POST['theater'])) ? htmlentities($_POST['theater']) : "";
$nama_menu = (isset($_POST['nama_menu'])) ? htmlentities($_POST['nama_menu']) : "";
$harga = (isset($_POST['harga'])) ? htmlentities($_POST['harga']) : "";
$kat_menu = (isset($_POST['kat_menu'])) ? htmlentities($_POST['kat_menu']) : "";
$stok = (isset($_POST['stok'])) ? htmlentities($_POST['stok']) : "";
$keterangan = (isset($_POST['keterangan'])) ? htmlentities($_POST['keterangan']) : "";

$kode_rand = rand(10000, 99999)."-";
$target_dir = "../assets/img/makanan/".$kode_rand;
$target_file = $target_dir . basename($_FILES['foto']['name']);
$imageType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

$foto_lama = (isset($_POST['foto_lama'])) ? htmlentities($_POST['foto_lama']) : "";
$id_menu = (isset($_POST['id'])) ? $_POST['id'] : "";

$statusUpload = 1;

if (!empty($_POST['input_menu_validate'])) {
    // Cek apakah gambar diunggah atau tidak
    if (!empty($_FILES['foto']['tmp_name'])) {
        // Proses gambar baru
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
                    } else {
                        // Buat direktori jika tidak ada
                        if (!is_dir($target_dir)) {
                            mkdir($target_dir, 0777, true);
                        }

                        // Pindahkan file baru
                        if (move_uploaded_file($_FILES['foto']['tmp_name'], $target_file)) {
                            // Hapus foto lama jika ada
                            if (!empty($foto_lama)) {
                                unlink("../assets/img/makanan/".$foto_lama);
                            }
                        }
                    }
                }
            }
        }
    } else {
        // Gunakan foto lama
        $kode_rand = substr($foto_lama, 0, 6); // Ambil kode_rand dari foto lama
        $target_file = "../assets/img/makanan/".$kode_rand.$foto_lama;
    }

    if($statusUpload == 0) {
        $message = '<script>alert("'.$message.', Gambar tidak dapat diupload");
                    window.location="../Makanan"</script>';
    } else {
        $select = mysqli_query($conn, "SELECT * FROM tb_menu WHERE nama_menu = '$nama_menu' AND id_menu != '$id_menu'");
        if (mysqli_num_rows($select) > 0) {
            $message = '<script>alert("Nama Film yang dimasukkan telah ada");
                        window.location="../Makanan"</script>';
        } else {
            // Ganti foto_menu dengan $target_file agar nama file yang baru disimpan
            $query = mysqli_query($conn, "UPDATE tb_menu SET foto_menu ='".$target_file."', nama_theater='$theater', nama_menu='$nama_menu', keterangan='$keterangan', harga='$harga', kategori='$kat_menu', stok='$stok' WHERE id_menu = '$id_menu'");
            if ($query) {
                $message = '<script>alert("Data berhasil dimasukkan");
                        window.location="../Makanan"</script>';
            } else {
                $message = '<script>alert("Data gagal dimasukkan");
                    window.location="../Makanan"</script>';
            }
        }
    }
}

echo $message;
?>
