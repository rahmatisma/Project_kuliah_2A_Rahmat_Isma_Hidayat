<?php
    include "connect.php";
    $id_film = (isset($_POST['id_film'])) ? htmlentities($_POST['id_film']) : "" ;
    $foto = (isset($_POST['foto'])) ? htmlentities($_POST['foto']) : "" ;

    if (!empty($_POST['input_film_validate'])) {
        $query = mysqli_query($conn, "DELETE FROM tb_film WHERE id_film = '$id_film'");
        if ($query) {
            unlink("../assets/img/film/$foto");
            $message = '<script>alert("Film berhasil dihapus");
                        window.location="../Film"</script>';
        } else {
            $message = '<script>alert("Film gagal dihapus");
                        window.location="../Film"</script>';
        }
    } echo $message;
?>