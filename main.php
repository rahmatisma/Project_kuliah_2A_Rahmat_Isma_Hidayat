<?php 
    session_start();
    if(empty($_SESSION['username_TLine'])){
        header('location: login');
    }

    include "proses/connect.php";
    $query = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$_SESSION[username_TLine]'");
    $hasil = mysqli_fetch_array($query);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/home.css">
</head>

<body>
    <!-- Awal Navbar -->
    <?php include "navbar.php" ?>
    <!-- Akhir Navbar -->

    <!-- Content -->
    <?php 
    include $page;
    ?>
    <!-- Akhir Content -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var navbarSearchForm = document.getElementById('navbarSearchForm');
            var headerSearchForm = document.getElementById('headerSearchForm');

            window.addEventListener('scroll', function() {
                var scrollPosition = window.scrollY;

                // Jika scroll di bawah batas tertentu, sembunyikan form pencarian di navbar
                if (scrollPosition > 150) {
                    navbarSearchForm.style.display = 'flex';
                } else {
                    navbarSearchForm.style.display = 'none';
                }
            });
        });
    </script>
</body>

</html>