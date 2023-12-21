<?php
include "proses/connect.php";
$query = mysqli_query($conn, "SELECT * FROM tb_film WHERE id_film = '$_GET[Home]'");

while ($record = mysqli_fetch_array($query)) {
    $result[] = $record;
}

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
    <link rel="stylesheet" href="/assets/css/detail_Upcoming.css">
    <style>
        .movie-content h3 {
            white-space: normal;
            /* Mencegah wrap pada h3 */
            overflow: hidden;
            /* Menghilangkan overflow ke dalam */
            text-overflow: ellipsis;
            /* Menambahkan elipsis jika teks melebihi lebar */
        }
    </style>
</head>

<body>
    <!-- content up coming -->
    <div class="container mt-3">
        <div class="row">
            <?php
            foreach ($result as $row) {
                echo "<div class='row'>
                    <div class='kiri col-lg-5 text-center'>
                        <div class='foto-film'>
                            <img src='assets/img/film/$row[foto]' typeimage='movie' class='foto-film'>
                        </div>
                        <div class='tombol-tiket mt-3'>
                            <a href='$row[trailer]' target='_blank'>watch trailer</a>
                        </div>
                    </div>
                    <div class='movie-content col-lg-4 mt-3'>
                        <h3 class='mb-5'>$row[nama_film]</h3>
        <h5>$row[jenis_film]</h5>
        <p>
            <ion-icon name='time-outline'></ion-icon> $row[durasi]
        </p>
        <ul class='desc-movie'>

            <li class='movie_produser'>
                <span><b>Produser : </b></span>$row[produser]
            </li>

            <li class='movie_produser'>
                <span><b>Sutradara : </b></span>$row[sutradara]
            </li>

            <li class='movie_writer'>
                <span><b>Penulis : </b></span>$row[penulis]
            </li>

            <li class='movie_distributor'>
                <span><b>Produksi : </b></span>$row[produksi]
            </li>

            <li class='movie_cast'>
                <span><b>Casts : </b></span>$row[casts]
            </li>
            <li class='movie_cast'>
                <input type='checkbox' id='check'>
                <span><b>Synopsis : </b></span><br>$row[sinopsis]
            </li>
        </ul>
    </div>
</div>";
            }
            ?>
        </div>
    </div>

    <!-- tanggal tayang -->
    <div class="container pemilihan-tanggal mt-3">
        <div class="tanggal">
            <ol class="d-flex flex-nowrap list-tanggal">
                <li class="hover">
                    <div class="hari">
                        <span class="tgl-link">Wednesday</span>
                    </div>
                    <div class="bulan-tanggal">
                        <span class="tgl-link">28 jun</span>
                    </div>
                </li>
                <li class="hover">
                    <div class="hari">
                        <span class="tgl-link">Thursday</span>
                    </div>
                    <div class="bulan-tanggal">
                        <span class="tgl-link">29 jun</span>
                    </div>
                </li>
                <li class="hover">
                    <div class="hari">
                        <span class="tgl-link">Friday</span>
                    </div>
                    <div class="bulan-tanggal">
                        <span class="tgl-link">30jun</span>
                    </div>
                </li>
                <li class="hover">
                    <div class="hari">
                        <span class="tgl-link">Saturday</span>
                    </div>
                    <div class="bulan-tanggal">
                        <span class="tgl-link">1 jul</span>
                    </div>
                </li>
                <li class="hover">
                    <div class="hari-weekend">
                        <span class="tgl-link">Sunday</span>
                    </div>
                    <div class="bulan-tanggal">
                        <span class="tgl-link">2 jul</span>
                    </div>
                </li>
                <li class="hover">
                    <div class="hari">
                        <span class="tgl-link">Monday</span>
                    </div>
                    <div class="bulan-tanggal">
                        <span class="tgl-link">3 jul</span>
                    </div>
                </li>
                <li class="hover">
                    <div class="hari">
                        <span class="tgl-link">Tuesday</span>
                    </div>
                    <div class="bulan-tanggal">
                        <span class="tgl-link">4 jul</span>
                    </div>
                </li>
                <li class="hover">
                    <div class="hari">
                        <span class="tgl-link">Wednesday</span>
                    </div>
                    <div class="bulan-tanggal">
                        <span class="tgl-link">5 jul</span>
                    </div>
                </li>
                <li class="hover">
                    <div class="hari">
                        <span class="tgl-link">Thursday</span>
                    </div>
                    <div class="bulan-tanggal">
                        <span>6 jul</span>
                    </div>
                </li>
                <li class="hover">
                    <div class="hari">
                        <span class="tgl-link">Friday </span>
                    </div>
                    <div class="bulan-tanggal">
                        <span class="tgl-link">7 jul</span>
                    </div>
                </li>
            </ol>
        </div>

        <!-- tombol search -->
        <div class="search-container mt-3 d-flex justify-content-center">
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search Cinema" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>

        <!-- card theater memili jam -->
        <!-- theater 1 -->
        <div class="card mx-auto mt-4">
            <div class="row g-0">
                <div class="col-md-4 d-flex align-items-center justify-content-center">
                    <img src="https://gotix.s3.ap-southeast-1.amazonaws.com/S3_PATH_PREFIX/events/104/1545102321-image.png" alt="Gambar" class="img-fluid theater-img">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <span class="card-title">Mall Theater</span>
                            </div>
                            <div class="col-auto">
                                <button class="panah btn arrow float-end" type="button" data-bs-toggle="collapse" data-bs-target="#collapseContent1" aria-expanded="false" aria-controls="collapseContent1">
                                    <ion-icon name="caret-down-outline"></ion-icon>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="collapse" id="collapseContent1">
                    <hr>
                    <div class="card-body">
                        <div class="list-jam">
                            <div class="kelas">
                                <span class="nama-kelas">PLATINUM S</span>
                            </div>
                            <div class="jam-tersedia">
                                <a href="/Page Login dan regis user/login_user.html">
                                    <button class="tombol-jam">
                                        <span>16:45</span>
                                    </button>
                                </a>
                                <a href="/Page Login dan regis user/login_user.html">
                                    <button class="tombol-jam">
                                        <span>19:45</span>
                                    </button>
                                </a>
                            </div>
                        </div>
                        <hr>
                        <div class="list-jam">
                            <div class="kelas">
                                <span class="nama-kelas">PLATINUM S</span>
                            </div>
                            <div class="jam-tersedia">
                                <a href="/Page Login dan regis user/login_user.html">
                                    <button class="tombol-jam">
                                        <span>16:45</span>
                                    </button>
                                </a>
                                <a href="/Page Login dan regis user/login_user.html">
                                    <button class="tombol-jam">
                                        <span>19:45</span>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- theater 2 -->
        <div class="card mx-auto mt-4">
            <div class="row g-0">
                <div class="col-md-4 d-flex align-items-center justify-content-center">
                    <img src="https://gotix.s3.ap-southeast-1.amazonaws.com/S3_PATH_PREFIX/events/104/1545102321-image.png" alt="Gambar" class="img-fluid theater-img">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <span class="card-title">Mall Theater</span>
                            </div>
                            <div class="col-auto">
                                <button class="panah btn arrow float-end" type="button" data-bs-toggle="collapse" data-bs-target="#collapseContent2" aria-expanded="false" aria-controls="collapseContent2">
                                    <ion-icon name="caret-down-outline"></ion-icon>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="collapse" id="collapseContent2">
                    <hr>
                    <div class="card-body">
                        <div class="list-jam">
                            <div class="kelas">
                                <span class="nama-kelas">PLATINUM S</span>
                            </div>
                            <div class="jam-tersedia">
                                <a href="/Page Login dan regis user/login_user.html">
                                    <button class="tombol-jam">
                                        <span>16:45</span>
                                    </button>
                                </a>
                                <a href="/Page Login dan regis user/login_user.html">
                                    <button class="tombol-jam">
                                        <span>19:45</span>
                                    </button>
                                </a>
                            </div>
                        </div>
                        <hr>
                        <div class="list-jam">
                            <div class="kelas">
                                <span class="nama-kelas">PLATINUM S</span>
                            </div>
                            <div class="jam-tersedia">
                                <a href="/Page Login dan regis user/login_user.html">
                                    <button class="tombol-jam">
                                        <span>16:45</span>
                                    </button>
                                </a>
                                <a href="/Page Login dan regis user/login_user.html">
                                    <button class="tombol-jam">
                                        <span>19:45</span>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- theater 3 -->
        <div class="card mx-auto mt-4">
            <div class="row g-0">
                <div class="col-md-4 d-flex align-items-center justify-content-center">
                    <img src="https://gotix.s3.ap-southeast-1.amazonaws.com/S3_PATH_PREFIX/events/104/1545102321-image.png" alt="Gambar" class="img-fluid theater-img">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <span class="card-title">Mall Theater</span>
                            </div>
                            <div class="col-auto">
                                <button class="panah btn arrow float-end" type="button" data-bs-toggle="collapse" data-bs-target="#collapseContent3" aria-expanded="false" aria-controls="collapseContent3">
                                    <ion-icon name="caret-down-outline"></ion-icon>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="collapse" id="collapseContent3">
                    <hr>
                    <div class="card-body">
                        <div class="list-jam">
                            <div class="kelas">
                                <span class="nama-kelas">PLATINUM S</span>
                            </div>
                            <div class="jam-tersedia">
                                <a href="/Page Login dan regis user/login_user.html">
                                    <button class="tombol-jam">
                                        <span>16:45</span>
                                    </button>
                                </a>
                                <a href="/Page Login dan regis user/login_user.html">
                                    <button class="tombol-jam">
                                        <span>19:45</span>
                                    </button>
                                </a>
                            </div>
                        </div>
                        <hr>
                        <div class="list-jam">
                            <div class="kelas">
                                <span class="nama-kelas">PLATINUM S</span>
                            </div>
                            <div class="jam-tersedia">
                                <a href="/Page Login dan regis user/login_user.html">
                                    <button class="tombol-jam">
                                        <span>16:45</span>
                                    </button>
                                </a>
                                <a href="/Page Login dan regis user/login_user.html">
                                    <button class="tombol-jam">
                                        <span>19:45</span>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- theater 4 -->
        <div class="card mx-auto mt-4">
            <div class="row g-0">
                <div class="col-md-4 d-flex align-items-center justify-content-center">
                    <img src="https://gotix.s3.ap-southeast-1.amazonaws.com/S3_PATH_PREFIX/events/104/1545102321-image.png" alt="Gambar" class="img-fluid theater-img">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <span class="card-title">Mall Theater</span>
                            </div>
                            <div class="col-auto">
                                <button class="panah btn arrow float-end" type="button" data-bs-toggle="collapse" data-bs-target="#collapseContent4" aria-expanded="false" aria-controls="collapseContent4">
                                    <ion-icon name="caret-down-outline"></ion-icon>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="collapse" id="collapseContent4">
                    <hr>
                    <div class="card-body">
                        <div class="list-jam">
                            <div class="kelas">
                                <span class="nama-kelas">PLATINUM S</span>
                            </div>
                            <div class="jam-tersedia">
                                <a href="/Page Login dan regis user/login_user.html">
                                    <button class="tombol-jam">
                                        <span>16:45</span>
                                    </button>
                                </a>
                                <a href="/Page Login dan regis user/login_user.html">
                                    <button class="tombol-jam">
                                        <span>19:45</span>
                                    </button>
                                </a>
                            </div>
                        </div>
                        <hr>
                        <div class="list-jam">
                            <div class="kelas">
                                <span class="nama-kelas">PLATINUM S</span>
                            </div>
                            <div class="jam-tersedia">
                                <a href="/Page Login dan regis user/login_user.html">
                                    <button class="tombol-jam">
                                        <span>16:45</span>
                                    </button>
                                </a>
                                <a href="/Page Login dan regis user/login_user.html">
                                    <button class="tombol-jam">
                                        <span>19:45</span>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- theater 5 -->
        <div class="card mx-auto mt-4">
            <div class="row g-0">
                <div class="col-md-4 d-flex align-items-center justify-content-center">
                    <img src="https://gotix.s3.ap-southeast-1.amazonaws.com/S3_PATH_PREFIX/events/104/1545102321-image.png" alt="Gambar" class="img-fluid theater-img">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <span class="card-title">Mall Theater</span>
                            </div>
                            <div class="col-auto">
                                <button class="panah btn arrow float-end" type="button" data-bs-toggle="collapse" data-bs-target="#collapseContent5" aria-expanded="false" aria-controls="collapseContent5">
                                    <ion-icon name="caret-down-outline"></ion-icon>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="collapse" id="collapseContent5">
                    <hr>
                    <div class="card-body">
                        <div class="list-jam">
                            <div class="kelas">
                                <span class="nama-kelas">PLATINUM S</span>
                            </div>
                            <div class="jam-tersedia">
                                <a href="/Page Login dan regis user/login_user.html">
                                    <button class="tombol-jam">
                                        <span>16:45</span>
                                    </button>
                                </a>
                                <a href="/Page Login dan regis user/login_user.html">
                                    <button class="tombol-jam">
                                        <span>19:45</span>
                                    </button>
                                </a>
                            </div>
                        </div>
                        <hr>
                        <div class="list-jam">
                            <div class="kelas">
                                <span class="nama-kelas">PLATINUM S</span>
                            </div>
                            <div class="jam-tersedia">
                                <a href="/Page Login dan regis user/login_user.html">
                                    <button class="tombol-jam">
                                        <span>16:45</span>
                                    </button>
                                </a>
                                <a href="/Page Login dan regis user/login_user.html">
                                    <button class="tombol-jam">
                                        <span>19:45</span>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="/assets/js/sinopsis.js"></script>
</body>

</html>