<?php
    include "connect.php";
    $id_ticket = (isset($_POST['id_ticket'])) ? htmlentities($_POST['id_ticket']) : "" ;
    if (!empty($_POST['input_ticket_validate'])) {
        $query = mysqli_query($conn, "DELETE FROM tb_ticket WHERE id_ticket = '$id_ticket'");
        if ($query) {
            $message = '<script>alert("Data berhasil dihapus");
                        window.location="../Ticket"</script>';
        } else {
            $message = '<script>alert("Data gagal dihapus");
                        window.location="../Ticket"</script>';
        }
    } echo $message;
?>