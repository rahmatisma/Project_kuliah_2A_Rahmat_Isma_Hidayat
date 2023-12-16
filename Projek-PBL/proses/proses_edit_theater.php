<?php
    include "connect.php";
    $id_theater = (isset($_POST['id_theater'])) ? htmlentities($_POST['id_theater']) : "" ;
    $nama_theater  = (isset($_POST['nama_theater'])) ? htmlentities($_POST['nama_theater']) : "";
    $kota = (isset($_POST['kota'])) ? htmlentities($_POST['kota']) : "";
    $nohp = (isset($_POST['nohp'])) ? htmlentities($_POST['nohp']) : "";
    $harga_weekday = (isset($_POST['harga_weekday'])) ? htmlentities($_POST['harga_weekday']) : "";
    $harga_weekend = (isset($_POST['harga_weekend'])) ? htmlentities($_POST['harga_weekend']) : "";
    $alamat = (isset($_POST['alamat'])) ? htmlentities($_POST['alamat']) : "";

    if (!empty($_POST['input_theater_validate'])) {
        $select = mysqli_query($conn, "SELECT * FROM tb_theaters WHERE nama_theater = '$nama_theater' AND id_theater != '$id_theater'");
        if (mysqli_num_rows($select) > 0) {
            $message = '<script>alert("Theater yang dimasukkan telah ada");
                        window.location="../Theater"</script>';
        } else {
            $query = mysqli_query($conn, "UPDATE tb_theaters SET kota = '$kota', nama_theater = '$nama_theater', alamat = '$alamat', nohp = '$nohp', harga_weekend = '$harga_weekend', harga_weekday = '$harga_weekday' WHERE id_theater = '$id_theater'");
            if ($query) {
                $message = '<script>alert("Data berhasil diupdate")
                        window.location="../Theater"</script>';
            } else {
                $message = '<script>alert("Data gagal diupdate")
                            window.location="../Theater"</script>';
            }
        }
    } echo $message;
?>