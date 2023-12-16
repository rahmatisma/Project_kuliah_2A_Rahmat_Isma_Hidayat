<?php
session_start();
include "connect.php";
$id_ticket = (isset($_POST['id_ticket'])) ? htmlentities($_POST['id_ticket']) : "";
$nama_film = (isset($_POST['nama_film'])) ? htmlentities($_POST['nama_film']) : "";
$theater = (isset($_POST['theater'])) ? htmlentities($_POST['theater']) : "";
$jam_tayang = (isset($_POST['jam_tayang'])) ? htmlentities($_POST['jam_tayang']) : "";

if (!empty($_POST['input_ticket_validate'])) {
    $select = mysqli_query($conn, "SELECT * FROM tb_ticket WHERE nama_film = '$nama_film' AND theater = '$theater' AND jam_tayang = '$jam_tayang    ' ORDER BY jam_tayang");
    if (mysqli_num_rows($select) > 0) {
        $message = '<script>alert("Ticket dengan nama film dan theater yang sama telah ada");
                        window.location="../Ticket"</script>';
    } else {
        $query = mysqli_query($conn, "INSERT INTO tb_ticket (nama_film,theater,jam_tayang) VALUES ('$nama_film','$theater','$jam_tayang')");
        if ($query) {
            $message = '<script>alert("Data berhasil dimasukan");
                        window.location="../Ticket"</script>';
        } else {
            $message = '<script>alert("Data gagal dimasukan")
                        window.location="../Ticket"</script>';
        }
    }
}
echo $message;
?>
