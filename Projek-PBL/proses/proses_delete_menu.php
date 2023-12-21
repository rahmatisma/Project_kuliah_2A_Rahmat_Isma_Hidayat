<?php
    include "connect.php";
    $id_menu = (isset($_POST['id'])) ? htmlentities($_POST['id']) : "" ;
    $foto = (isset($_POST['foto'])) ? htmlentities($_POST['foto']) : "" ;

    if (!empty($_POST['input_menu_validate'])) {
        $query = mysqli_query($conn, "DELETE FROM tb_menu WHERE id_menu = '$id_menu'");
        if ($query) {
            unlink("../assets/img/makanan/$foto");
            $message = '<script>alert("Film berhasil dihapus");
                        window.location="../Makanan"</script>';
        } else {
            $message = '<script>alert("Film gagal dihapus");
                        window.location="../Makanan"</script>';
        }
    } echo $message;
?>

