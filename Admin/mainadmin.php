<?php
session_start();

if (!empty($_SESSION['username_TLine'])) {
    include "proses/connect.php";
    $query = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$_SESSION[username_TLine]'");
    $hasil = mysqli_fetch_array($query);
    if ($_SESSION['level_user'] == 6 || $_SESSION['level_user'] == 5) {
        header('Location:../home');
    }
} else {
    header('location:login');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- bosstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- link css -->
    <link rel="stylesheet" href="/assets/css/style_dasboard.css">

    <!-- link font awelsome -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
    <div class="container">
        <aside>
            <?php 
            include "sidebar.php";
            ?>
        </aside>

        <!-- content -->
        <main>
            <?php 
            include "navbaradmin.php";
            ?>
            
            <?php 
            include $page;
            ?>
        </main>
        <!-- end main -->
    </div>

    <script src="/assets/js/script.js"></script>
</body>

</html>