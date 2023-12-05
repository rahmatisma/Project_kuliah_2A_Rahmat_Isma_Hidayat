<?php
    include "connect.php";
    $name = (isset($_POST['name'])) ? htmlentities($_POST['name']) : "" ;
    $username = (isset($_POST['username'])) ? htmlentities($_POST['username']) : "" ;
    $password = (isset($_POST['password'])) ? md5(htmlentities($_POST['password']))  : "";

    if(!empty($_POST['regis_validate'])){
        $select = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username'");
        if(mysqli_num_rows($select) > 0) {
            $message = '<script>alert("Email yang digunakan sudah terdaftar");
            window.location="../login"</script>';
        } else{
            $query = mysqli_query($conn, "INSERT INTO tb_user (nama, username, password, level) values ('$name', '$username', '$password', '6')");
            if($query){
                $message = '<script>alert("Data Berhasil Dimasukkan");
                window.location="../login"</script>';
            }else{
                $message = '<script>alert("Data Gagal Dimasukkan")</script>';
            }
        }
    } echo $message;
?>