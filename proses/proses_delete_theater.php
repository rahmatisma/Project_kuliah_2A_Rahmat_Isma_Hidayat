<?php
    include "connect.php";
    $id_theater = (isset($_POST['id_theater'])) ? htmlentities($_POST['id_theater']) : "" ;

    if (!empty($_POST['input_theater_validate'])) {
        $query = mysqli_query($conn, "DELETE FROM tb_theaters WHERE id_theater = '$id_theater'");
        if ($query) {
            $message = '<script>alert("Data berhasil dihapus");
                        window.location="../Theater"</script>';
        } else {
            $message = '<script>alert("Data gagal dihapus");
                        window.location="../Theater"</script>';
        }
    } echo $message;
?>