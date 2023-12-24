<?php
include "connect.php";
$nama  = (isset($_POST['nama'])) ? htmlentities($_POST['nama']) : "";
$id_ticket  = (isset($_POST['id_ticket'])) ? htmlentities($_POST['id_ticket']) : "";
$nama_film  = (isset($_POST['nama_film'])) ? htmlentities($_POST['nama_film']) : "";
$theater  = (isset($_POST['theater'])) ? htmlentities($_POST['theater']) : "";
$jam_tayang  = (isset($_POST['jam_tayang'])) ? htmlentities($_POST['jam_tayang']) : "";

if (!empty($_POST['input_order_validate'])) {
    $select = mysqli_query($conn, "SELECT * FROM tb_order WHERE nama_customer = '$nama'");
    $query = mysqli_query($conn, "INSERT INTO tb_order (nama_customer, jenis_pesanan) VALUES ('$nama','1')");
    if ($query) {
        $message = '<script>window.location="../?x=PilihKursi&DetailFilm='.$id_ticket.'&nama_film='.$nama_film.'&theater='.$theater.'&jam_tayang='.$jam_tayang.'"</script>';

    } else {
        $message = '<script>alert("Pesanan gagal diproses")
                        window.location="../Home"</script>';
    }
}
echo $message;
?>
