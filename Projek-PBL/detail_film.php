<!-- untuk menampilkan data film -->
<?php
include "proses/connect.php";

// Ambil data film dan tiket yang berkaitan
$query = mysqli_query($conn, "SELECT * FROM tb_film
                            LEFT JOIN tb_ticket ON tb_ticket.nama_film = tb_film.nama_film
                            WHERE tb_film.id_film = '$_GET[Home]'");

while ($record = mysqli_fetch_array($query)) {
    $result[] = $record;
}

$query2 = mysqli_query($conn, "SELECT * FROM tb_film WHERE tb_film.id_film = '$_GET[Home]'");
while ($data = mysqli_fetch_array($query2)) {
    $data_film[] = $data;
}

$jam_tayang = mysqli_query($conn, "SELECT * FROM tb_film WHERE tb_film.id_film = '$_GET[Home]'");
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
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
            foreach ($data_film as $film) {
                echo "<div class='row'>
                        <div class='kiri col-lg-6 text-center'>
                            <div class='foto-film'>
                                <img src='assets/img/film/$film[foto]' typeimage='movie' class='foto-film'>
                            </div>
                            <div class='tombol-tiket mt-4'>
                                <a href='$film[trailer]' target='_blank'>watch trailer</a>
                            </div>
                        </div>
                        <div class='kanan col-lg-6 text-right'>
                            <div class='movie-content mt-3'>
                                <div class='header-content'>
                                    <h3 class='mb-3'>$film[nama_film]</h3>
                                    <h5>$film[jenis_film]</h5>
                                </div>
                                <p class='mb-5'>
                                    <ion-icon name='time-outline'></ion-icon> $film[durasi]
                                </p>
                                <ul class='desc-movie'>
                                    <li class='movie_produser'>
                                        <span><b>Produser :</b></span> $film[produser]
                                    </li>
                                    <li class='movie_produser'>
                                        <span><b>Sutradara :</b></span> $film[sutradara]
                                    </li>
                                    <li class='movie_writer'>
                                        <span><b>Penulis :</b></span> $film[penulis]
                                    </li>
                                    <li class='movie_distributor'>
                                        <span><b>Produksi :</b></span> $film[produksi]
                                    </li>
                                    <div class='deskripsi'>
                                        <li class='movie_cast'>
                                            <span><b>Casts :</b></span> $film[casts]
                                        </li>
                                        <li class='movie_cast'>
                                            <span><b>Synopsis </b></span>  $film[sinopsis]
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

    <!-- tanggal tayang -->
    <div class="container pemilihan-tanggal mt-3">
        <div class="tanggal">
            <ol class="d-flex flex-nowrap list-tanggal" id="dynamicDates">
                <!-- Data akan muncul secara dinamis menggunakan java script -->
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
        <?php
        $i = 1;
        foreach ($result as $row) {
        ?>
            <div class="card mx-auto mt-4">
                <div class="row g-0">
                    <div class="col-md-4 d-flex align-items-center justify-content-center">
                        <img src="https://gotix.s3.ap-southeast-1.amazonaws.com/S3_PATH_PREFIX/events/104/1545102321-image.png" alt="Gambar" class="img-fluid theater-img">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9">
                                    <span class="card-title"><?php echo $row['theater'] ?></span>
                                </div>
                                <div class="col-auto">
                                    <button class="panah btn arrow float-end" type="button" data-bs-toggle="collapse" data-bs-target="#collapseContent<?php echo $i ?>" aria-expanded="false" aria-controls="collapseContent<?php echo $i ?>">
                                        <ion-icon name="caret-down-outline"></ion-icon>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="collapse" id="collapseContent<?php echo $i ?>">
                        <hr>
                        <div class="card-body">
                            <div class="list-jam">
                                <div class="kelas">
                                    <span class="nama-kelas">Jam Tayang</span>
                                </div>
                                <?php
                                $theater = $row['theater'];
                                foreach ($result as $row) {
                                    if($theater == $row['theater']) {
                                ?>
                                    <div class="jam-tersedia">
                                        <a href="/?x=PilihKursi&DetailFilm=<?php echo $row['id_ticket'] ?> &nama_film=<?php echo $row['nama_film']?> &theater=<?php echo $row['theater']?> &jam_tayang=<?php echo $row['jam_tayang']?>">
                                            <button class="tombol-jam">
                                                <span><?php echo $row['jam_tayang'] ?></span>
                                            </button>
                                        </a>
                                    </div>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
            $i++;
        }
        ?>
    </div>


    <!-- ion icon -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!-- script untuk menampilkan tanggal -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var currentDate = new Date();
            var numberOfDays = 10;
            var dateList = document.getElementById("dynamicDates");

            for (var i = 0; i < numberOfDays; i++) {
                var nextDate = new Date();
                nextDate.setDate(currentDate.getDate() + i);

                var formattedDate = nextDate.toLocaleDateString('en-US', {
                    weekday: 'long',
                    day: 'numeric',
                    month: 'short'
                });

                var listItem = document.createElement("li");
                listItem.classList.add("hover");

                var dayElement = document.createElement("div");
                if (nextDate.getDay() === 0 || nextDate.getDay() === 6) {
                    dayElement.classList.add("hari-weekend"); // Tambahkan class untuk warna merah pada weekend
                } else {
                    dayElement.classList.add("hari");
                }
                dayElement.innerHTML = '<span class="tgl-link">' + formattedDate.split(' ')[0] + '</span>';
                listItem.appendChild(dayElement);

                var dateElement = document.createElement("div");
                dateElement.classList.add("bulan-tanggal");
                if (nextDate.getDay() === 0 || nextDate.getDay() === 6) {
                    dateElement.classList.add("tgl-weekend"); // Tambahkan class untuk warna merah pada weekend
                }
                dateElement.innerHTML = '<span class="tgl-link">' + formattedDate.substr(formattedDate.indexOf(' ') + 1) + '</span>';
                listItem.appendChild(dateElement);

                listItem.addEventListener('click', function() {
                    // Hapus class 'selected' dari semua elemen di dalam list
                    var listItems = dateList.getElementsByTagName('li');
                    for (var j = 0; j < listItems.length; j++) {
                        listItems[j].classList.remove('selected');
                    }

                    // Tambahkan class 'selected' ke elemen yang diklik
                    this.classList.add('selected');
                });

                dateList.appendChild(listItem);
            }
        });
    </script>
</body>

</html>