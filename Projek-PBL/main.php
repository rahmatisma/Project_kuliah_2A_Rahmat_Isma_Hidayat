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

<!-- <footer>
    <div class="footer-container mt-5">
        <div id="footer_content" class="row">
            <div id="footer_contacts" class="col-md-4 text-center">
                <p><strong>Partner Kami</strong></p>
                <div>
                    <img src="./assets/img/sejahtera_v.png" alt="" width="250" height="60">
                    <p>Kunjungi Sosial Media Kami!</p>
                </div>
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
            <div class="col-md-4">
                <h4 class="text-center">Kontak Kami</h4>
                <ul class="text-center">
                    <li>Alamat: Jln. Iskandar Muda No. 1-6, blang pidie</li>
                    <li>Email: e-swalayan@gmail.com</li>
                    <li>Telepon: 021-6556</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-bottom ">
        <div class="footer-content">
            <p>&copy; 2023 E-Swalayan. Hak Cipta Dilindungi.</p>
        </div>
    </div>
</footer> -->

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
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Ketik Alamat Emailmu...">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Pesan</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="btn btn-success d-block"> Kirim</div>
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