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

$kode_rand = rand(10000, 99999) . "-";
$target_dir = "../assets/img/film/";
$target_file = $target_dir . $kode_rand . basename($_FILES['foto']['name']);
$imageType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

$foto_lama = (isset($_POST['foto_lama'])) ? htmlentities($_POST['foto_lama']) : "";
$id_film = (isset($_POST['id_film'])) ? $_POST['id_film'] : "";

$statusUpload = 1;
if (!empty($_POST['input_film_validate'])) {
    // Cek apakah gambar diunggah atau tidak
    if (!empty($_FILES['foto']['tmp_name'])) {
        // Proses gambar baru
        $cek = getimagesize($_FILES['foto']['tmp_name']);
        if ($cek == false) {
            $message = "Ini Bukan file gambar";
            $statusUpload = 0;
        } else {
            $statusUpload = 1;

            // Hapus foto lama jika ada
            if (!empty($foto_lama)) {
                unlink($target_dir . $foto_lama);
            }

            // Pindahkan file baru
            if (move_uploaded_file($_FILES['foto']['tmp_name'], $target_file)) {
                $target_file = $kode_rand . basename($_FILES['foto']['name']);
            } else {
                $message = "Gagal mengunggah file foto";
                $statusUpload = 0;
            }
        }
    } else {
        // Gunakan foto lama
        $target_file = $foto_lama;
    }

    if ($statusUpload == 0) {
        $message = '<script>alert("' . $message . ', Gambar tidak dapat diupload");
                    window.location="../Film"</script>';
    } else {
        $select = mysqli_query($conn, "SELECT * FROM tb_film WHERE nama_film = '$nama_film' AND id_film != '$id_film'");
        if (mysqli_num_rows($select) > 0) {
            $message = '<script>alert("Nama Film yang dimasukkan telah ada");
                        window.location="../Film"</script>';
        } else {
            $query = mysqli_query($conn, "UPDATE tb_film SET foto ='" . $target_file . "', nama_film='$nama_film', jenis_film='$jenis_film', produser='$produser', sutradara='$sutradara', penulis='$penulis', produksi='$produksi',casts='$casts',durasi='$durasi',trailer='$trailer',sinopsis='$sinopsis' WHERE id_film = '$id_film'");
            if ($query) {
                $message = '<script>alert("Data berhasil dimasukkan");
                    window.location="../Film"</script>';
            } else {
                $message = '<script>alert("Data gagal dimasukkan");
                    window.location="../Film"</script>';
            }
        }
    }
}

echo $message;
?>
