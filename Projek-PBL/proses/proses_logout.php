<?php 
session_start();
session_destroy();
include "connect.php";
$query = mysqli_query($conn, "SELECT * FROM tb_user WHERE level");
$hasil = mysqli_fetch_array($query);
if ($_SESSION['level_user'] == 6 || $_SESSION['level_user'] == 5) {
    header('Location:../home');
} else if ($_SESSION['level_user'] != 6 || $_SESSION['level_user'] != 5) {
    header('Location:../login');
}
?>