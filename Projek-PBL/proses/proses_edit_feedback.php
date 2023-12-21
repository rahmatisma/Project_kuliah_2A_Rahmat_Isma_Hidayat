<?php
include "connect.php";
$id_feedback = (isset($_POST['id'])) ? htmlentities($_POST['id']) : "";

if (!empty($_POST['input_feedback_validate'])) {
    $select = mysqli_query($conn, "SELECT * FROM tb_feedback WHERE id_feedback = '$id_feedback'");
    $query = mysqli_query($conn, "UPDATE tb_feedback SET status = '2' WHERE id_feedback = '$id_feedback'");
    if ($query) {
        $message = '<script>alert("Status berhasil Diambil tindakan")
                        window.location="../Messages"</script>';
    } else {
        $message = '<script>alert("Status gagal Diambil tindakan")
                            window.location="../Messages"</script>';
    }
}
echo $message;
