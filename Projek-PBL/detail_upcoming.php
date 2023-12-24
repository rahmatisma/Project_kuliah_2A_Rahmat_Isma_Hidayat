<?php
include "proses/connect.php";
$query = mysqli_query($conn, "SELECT * FROM tb_film WHERE id_film = '$_GET[Upcoming]'");

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
                <div class='kiri col-lg-6 text-center'>
                    <div class='foto-film'>
                        <img src='assets/img/film/$row[foto]' typeimage='movie' class='foto-film'>
                    </div>
                    <div class='tombol-tiket mt-4'>
                        <a href='$row[trailer]' target='_blank'>watch trailer</a>
                    </div>
                </div>
                <div class='kanan col-lg-6 text-right'>
                    <div class='movie-content mt-3'>
                        <div class='header-content'>
                            <h3 class='mb-3'>$row[nama_film]</h3>
                            <h5>$row[jenis_film]</h5>
                        </div>
                        <p class='mb-5'>
                            <ion-icon name='time-outline'></ion-icon> $row[durasi]
                        </p>
                        <ul class='desc-movie'>
                            <li class='movie_produser'>
                                <span><b>Produser :</b></span> $row[produser]
                            </li>
                            <li class='movie_produser'>
                                <span><b>Sutradara :</b></span> $row[sutradara]
                            </li>
                            <li class='movie_writer'>
                                <span><b>Penulis :</b></span> $row[penulis]
                            </li>
                            <li class='movie_distributor'>
                                <span><b>Produksi :</b></span> $row[produksi]
                            </li>
                            <div class='deskripsi'>
                                <li class='movie_cast'>
                                    <span><b>Casts :</b></span> $row[casts]
                                </li>
                                <li class='movie_cast'>
                                    <span><b>Synopsis </b></span>  $row[sinopsis]
                                </li>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>";
            }
            ?>
        </div>
    </div>
</body>

</html>