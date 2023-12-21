<?php
session_start();
include "connect.php";
$nama  = (isset($_POST['nama'])) ? htmlentities($_POST['nama']) : "";
$email = (isset($_POST['email'])) ? htmlentities($_POST['email']) : "";
$feedback = (isset($_POST['feedback'])) ? htmlentities($_POST['feedback']) : "";

if (!empty($_POST['input_feedback_validate'])) {
    $select = mysqli_query($conn, "SELECT * FROM tb_feedback WHERE email = '$email'");

    if (empty($_SESSION['username_TLine'])) {
        $message = '<script>alert("Harap Login terlebih dahulu")
                        window.location="../login"</script>';
    } else if($_SESSION['username_TLine'] != $email) {
        $message = '<script>alert("Harap masukan email yang sesuai dengan email anda")
                        window.location="../Home"</script>';
    } else {
        $query = mysqli_query($conn, "INSERT INTO tb_feedback (nama,email,feedback) VALUES ('$nama','$email','$feedback')");
        if ($query) {
            $message = '<script>alert("Feedback berhasil di kirim Terimakasih atas masukan nya")
                        window.location="../Home"</script>';
        } else {
            $message = '<script>alert("Feedback tidak terkirim tolong coba lagi")</script>';
        }
    }
}
echo $message;
