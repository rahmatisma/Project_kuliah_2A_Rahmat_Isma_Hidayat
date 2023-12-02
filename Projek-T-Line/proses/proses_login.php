<?php 
session_start();
include "connect.php";
    $username = (isset($_POST['username'])) ? htmlentities($_POST['username']) : "" ;
    $password = (isset($_POST['password'])) ? md5(htmlentities($_POST['password'])) : "";
    if(!empty($_POST['login_validate'])){
        $query = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' && password = '$password'");
        $hasil = mysqli_fetch_array($query);
        if($hasil){
            $_SESSION['username_T-Line'] = $username;
            header('Location:../home');
        } else { ?>
            <script>
                alert('Username salah atau password salah');
                window.location='../login';
            </script>
<?php
        }
    }
?>