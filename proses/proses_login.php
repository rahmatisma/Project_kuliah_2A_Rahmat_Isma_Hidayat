<?php 
session_start();
include "connect.php";
    $username = (isset($_POST['username'])) ? htmlentities($_POST['username']) : "" ;
    $password = (isset($_POST['password'])) ? md5(htmlentities($_POST['password'])) : "";
    if(!empty($_POST['login_validate'])){
        $query = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' && password = '$password'");
        $hasil = mysqli_fetch_array($query);
        if($hasil){
            $_SESSION['username_TLine'] = $username;
            $_SESSION['level_user'] = $hasil['level'];
            if ($_SESSION['level_user'] == 6 || $_SESSION['level_user'] == 5) {
                header('Location:../home');
            } else if ($_SESSION['level_user'] != 6 || $_SESSION['level_user'] != 5) {
                header('Location:../dasboard');
            }
            
        } else { ?>
            <script>
                alert('Username salah atau password salah');
                window.location='../login';
            </script>
<?php
        }
    }
?>