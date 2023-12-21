<?php
session_start();
if (!empty($_SESSION['username_TLine'])) {
    include "proses/connect.php";
    $query = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$_SESSION[username_TLine]'");
    $hasil = mysqli_fetch_array($query);
    if ($_SESSION['level_user'] == 1 || $_SESSION['level_user'] == 2 || $_SESSION['level_user'] == 3) {
        header('location: dasboard');
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>T-Line</title>
    <link rel="icon" href="/assets/img/logo/Screenshot 2023-11-18 105415.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/home.css">
    <!-- link font awelsome  -->
    <script src="https://kit.fontawesome.com/90ac0be598.js" crossorigin="anonymous"></script>
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

    
</body>

<!--Footer-->
<footer class="footer-custom">
    <div class="container footer">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12  mb-5">
                <a class="navbar-brand" href="#"><img src="assets/img/logo/Screenshot 2023-11-18 105415.png" width="30%"></a>
                <div id="footer_social_media">
                    <a href="#" class="footer-link" id="instagram">
                        <i class="fa-brands fa-instagram"></i>
                    </a>

                    <a href="#" class="footer-link" id="facebook">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>

                    <a href="#" class="footer-link" id="whatsapp">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 mt-5 offset-lg-4">
                <h3>Kritik Dan Aduan</h3>
                <form class="needs-validation" novalidate action="proses/proses_input_feedback.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Ketik Alamat Emailmu..." name="email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Pesan</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="feedback"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" name="input_feedback_validate" value="12345">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="footer-bottom ">
            <div class="footer-content">
                <p>&copy; 2023 T-Line. Hak Cipta Dilindungi.</p>
            </div>
        </div>
    </div>
</footer>

</html>