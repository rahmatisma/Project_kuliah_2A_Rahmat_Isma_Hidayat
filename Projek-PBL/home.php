<?php
include "proses/connect.php";
$query = mysqli_query($conn, "SELECT * FROM tb_ticket
    RIGHT JOIN tb_film ON tb_film.nama_film = tb_ticket.nama_film
    LEFT JOIN tb_theaters ON tb_theaters.nama_theater = tb_ticket.theater");

while ($record = mysqli_fetch_array($query)) {
    $result[] = $record;
}

$kota = mysqli_query($conn, "SELECT DISTINCT kota FROM tb_theaters");
$foto = mysqli_query($conn, "SELECT DISTINCT foto FROM tb_film");
$nama_film = mysqli_query($conn, "SELECT DISTINCT nama_film FROM tb_ticket");

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <link rel="stylesheet" href="/assets/css/home.css">
    <!-- link font awelsome  -->
</head>

<body>
    <div class="header_content">
        <h5>Hai Kamu, Mau Nonton Apa Hari Ini ?</h5>
        <div class="search-container">
            <form class="d-flex" role="search" id="headerSearchForm">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>

    <!-- Awal Corousel -->
    <div class="container mt-3">
        <div class="container-bg">
            <div class="d-flex justify-content-center align-items-center">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/assets/img/Promo/promo 1.webp" class="img-fluid" style="height: 250px; width:1000px; object-fit: cover;" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/assets/img/Promo/promo 2.webp" class="img-fluid" style="height: 250px; width:1000px; object-fit: cover;" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/assets/img/Promo/promo 3.webp" class="img-fluid" style="height: 250px; width:1000px; object-fit: cover;" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Corousel -->

    <!-- memilih kota film now playing -->
    <div class="container mt-3" id="nowPlaying">
        <div class="heading-twenty">
            <h3>Now Playing</h3>
            <div class="select-twenty">
                <select class="custom-select" id="cityChanged">
                    <?php
                    foreach ($kota as $row) {
                        echo "<option>$row[kota]</option>";
                    }
                    ?>
                </select>
            </div>
        </div>

        <?php
        $seenNama_Film = array();
        $seenFoto_Film = array();
        ?>

        <div class="row">
            <?php
            foreach ($result as $film) {
                if (!empty($film['id_ticket'])) {
                    $nama_film = $film['nama_film'];
                    $foto_film = $film['foto'];

                    if (!in_array($nama_film, $seenNama_Film)) {
                        if (!in_array($foto_film, $seenFoto_Film)) {
                            echo "<div class='col-lg-3 col-md-4 col-sm-4 col-6 mt-4'>
                        <div class='card-deck'>
                            <div class='card text-center'>
                                <div class='img-wrapper'>
                                    <a href=''>
                                        <img src='assets/img/film/$foto_film' class='card-img-top p-3'>
                                    </a>
                                </div>
                                <div class='card-body'>
                                    <h6 class='card-title p'><b>$nama_film</b></h6>
                                    <hr>
                                    <a href='/?x=DetailFilm&Home= $film[id_film] &nama_film= $film[nama_film]' class='btn btn-primary d-grid'>Get Ticket</a>
                                </div>
                            </div>
                        </div>
                    </div>";
                            $seenNama_Film[] = $nama_film;
                            $seenFoto_Film[] = $foto_film;
                        }
                    }
                }
            }
            ?>
        </div>
    </div>

    <!-- content up coming -->
    <div class="container mt-3">
        <div class="heading-twenty">
            <h3>Up Coming</h3>
        </div>


        <?php
        $seenNama_Film2 = array();
        $seenFoto_Film2 = array();
        ?>
        <div class="row">
            <?php
            foreach ($result as $film) {
                if (empty($film['id_ticket'])) {
                    $nama_film2 = $film['nama_film'];
                    $foto_film2 = $film['foto'];

                    if (!in_array($nama_film2, $seenNama_Film2)) {
                        if (!in_array($foto_film2, $seenFoto_Film2)) {
                            echo "<div class='col-lg-3 col-md-4 col-sm-4 col-6 mt-4'>
                        <div class='card-deck'>
                            <div class='card text-center'>
                                <div class='img-wrapper'>
                                    <a href=''>
                                        <img src='assets/img/film/$foto_film2' class='card-img-top p-3'>
                                    </a>
                                </div>
                                <div class='card-body'>
                                    <h6 class='card-title p'><b>$nama_film2</b></h6>
                                    <hr>
                                    <a href='/?x=DetailUpcoming&Upcoming= $film[id_film]'&meja='$film[nama_film]' class='btn btn-primary d-grid'>Info </a>
                                </div>
                            </div>
                        </div>
                    </div>";
                            $seenNama_Film2[] = $nama_film2;
                            $seenFoto_Film2[] = $foto_film2;
                        }
                    }
                }
            }
            ?>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center mt-5">
                    <a href="/Upcoming" class="movie-load-more">View More</a>
                </div>
            </div>
        </div>
    </div>

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