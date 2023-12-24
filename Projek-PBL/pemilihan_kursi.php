<?php
include "proses/connect.php";
$query = mysqli_query($conn, "SELECT * FROM tb_ticket
    RIGHT JOIN tb_film ON tb_film.nama_film = tb_ticket.nama_film
    LEFT JOIN tb_theaters ON tb_theaters.nama_theater = tb_ticket.theater
    WHERE tb_ticket.id_ticket = $_GET[DetailFilm]");

while ($record = mysqli_fetch_array($query)) {
    $result[] = $record;
}

$order = mysqli_query($conn, "SELECT waktu FROM tb_order");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemilihan Kursi</title>

    <!-- link css -->
    <link rel="stylesheet" href="/assets/css/pemilihan_kursi.css">

    <!-- link boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">


    <!-- link font awelsome  -->
    <script src="https://kit.fontawesome.com/90ac0be598.js" crossorigin="anonymous"></script>

    <style>
        .theater {
            display: flex;
            flex-direction: column;
            /* Membuat elemen-elemen di dalam theater menjadi satu kolom */
        }

        .seat-number {
            display: flex;
            flex-wrap: wrap;
            /* Menyebabkan elemen-elemen wrap ke bawah jika ke kanan penuh */
            align-items: flex-start;
            /* Memulai penempatan elemen-elemen di bagian atas container */
        }

        .seat-number p.Choice {
            margin-right: 5px;
            /* Memberikan jarak antar elemen p.Choice */
            margin-bottom: 5px;
            /* Memberikan jarak vertikal antar elemen jika wrap ke bawah */
        }
    </style>


</head>
<?php
foreach ($query as $row) {
?>

    <body style="background-color: #f0f1ee;">
        <div class="container">
            <div class="button-back">
                <a href="/Page deskripsi film/Page_sinopsis_film.html" class="icon-panah">
                    <i class="fa-solid fa-arrow-left"></i>
                </a>
                <p>Choose Seats</p>
            </div>
            <div class="row">
                <div class="theater col-lg-8 col-sm-12">
                    <div class="screen-top-side">
                        <div class="panel-screen"></div>
                        <p>SCREEN</p>
                    </div>

                    <div class="keterangan-harga">
                        <p class="harga">Gold - <?php echo $row['harga_weekend'] ?></p>
                    </div>
                    <div class="seat">

                        <!-- baris ke 6 -->
                        <div class="row-wrap">
                            <?php
                            for ($i = 0; $i < 8; $i++) {
                            ?>
                                <div class="seat">
                                    <button class="icon bangku fa-solid fa-square fa-custom"></button>
                                    <p>F<?php echo $i ?></p>
                                </div>
                                <?php
                                if ($i == 2) {
                                ?>
                                    <div class="space"></div>
                                <?php
                                }
                                ?>
                            <?php
                            }
                            ?>
                        </div>

                        <!-- baris ke 5 -->
                        <div class="row-wrap">
                            <?php
                            for ($i = 0; $i < 8; $i++) {
                            ?>
                                <div class="seat">
                                    <button class="icon bangku fa-solid fa-square fa-custom"></button>
                                    <p>E<?php echo $i ?></p>
                                </div>
                                <?php
                                if ($i == 2) {
                                ?>
                                    <div class="space"></div>
                                <?php
                                }
                                ?>
                            <?php
                            }
                            ?>
                        </div>

                        <!-- Baris ke 4 -->
                        <div class="row-wrap">
                            <?php
                            for ($i = 0; $i < 8; $i++) {
                            ?>
                                <div class="seat">
                                    <button class="icon bangku fa-solid fa-square fa-custom"></button>
                                    <p>D<?php echo $i ?></p>
                                </div>
                                <?php
                                if ($i == 2) {
                                ?>
                                    <div class="space"></div>
                                <?php
                                }
                                ?>
                            <?php
                            }
                            ?>
                        </div>

                        <!-- Baris ke 3 -->
                        <div class="row-wrap">
                            <?php
                            for ($i = 0; $i < 8; $i++) {
                            ?>
                                <div class="seat">
                                    <button class="icon bangku fa-solid fa-square fa-custom"></button>
                                    <p>C<?php echo $i ?></p>
                                </div>
                                <?php
                                if ($i == 2) {
                                ?>
                                    <div class="space"></div>
                                <?php
                                }
                                ?>
                            <?php
                            }
                            ?>
                        </div>

                        <!-- Baris ke 2 -->
                        <div class="row-wrap">
                            <?php
                            for ($i = 0; $i < 8; $i++) {
                            ?>
                                <div class="seat">
                                    <button class="icon bangku fa-solid fa-square fa-custom"></button>
                                    <p>B<?php echo $i ?></p>
                                </div>
                                <?php
                                if ($i == 2) {
                                ?>
                                    <div class="space"></div>
                                <?php
                                }
                                ?>
                            <?php
                            }
                            ?>
                        </div>

                        <!-- Baris ke 1 -->
                        <div class="row-wrap">
                            <?php
                            for ($i = 0; $i < 9; $i++) {
                            ?>
                                <div class="seat">
                                    <button class="icon bangku fa-solid fa-square fa-custom"></button>
                                    <p>A<?php echo $i ?></p>
                                </div>
                            <?php
                            }
                            ?>
                        </div>

                    </div>
                    <div class="keteranga-bangku">
                        <p>Unavailable</p>
                        <i class="bangku-Available fa-solid fa-square fa-custom"></i>
                        <p>Available</p>
                        <i class="bangku--Your-Choice fa-solid fa-square fa-custom"></i>
                        <p>Your Choice</p>
                        <i class="bangku-Unavailable fa-solid fa-square fa-custom"></i>
                    </div>
                </div>

                <div class="keterangan col-lg-3 col-sm-12">
                    <div class="foto-film">
                        <img src="assets/img/film/<?php echo $row['foto'] ?>" alt="<?php echo $row['nama_film'] ?>" typeimage="movie" class="foto-film">
                    </div>
                    <div class="judul">
                        <h2><?php echo $row['nama_film'] ?></h2>
                    </div>
                    <ul>
                        <li>
                            <p class="pesanan-detail">Cinema</p>
                            <p class="detail"><?php echo $row['theater'] ?></p>
                            <hr>
                        </li>
                        <li>
                            <p class="pesanan-detail">Date Time</p>
                            <p class="detail">Sat 1 July 15:50</p>
                        </li>
                        <li>
                            <p class="pesanan-detail">Class</p>
                            <p class="detail"><?php echo $row['kelas'] ?></p>
                        </li>
                    </ul>
                    <p>Seat Number</p>
                    <div class="seat-number">
                        <!-- berisi pilihan kursi -->
                    </div>
                    <div class="seat-selected">
                        <p>Seat Selected</p>
                        <p class="price">Rp.0</p>
                    </div>

                    <div class="button-pesan">
                        <a href="pemilihan_metode_pembayaran.php">
                            <button class="continue">Continue</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    <?php
}
    ?>


    <!-- script boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>

    <script src="https://kit.fontawesome.com/90ac0be598.js" crossorigin="anonymous"></script>


    <script>
        var icons = document.querySelectorAll('.icon');

        icons.forEach(function(icon) {
            icon.addEventListener('click', function() {
                toggleColor(icon);
                updateTotalPrice(); // Tambahkan pemanggilan fungsi untuk memperbarui total harga
            });
        });

        function toggleColor(icon) {
            if (icon.style.color === 'green') {
                icon.style.color = 'black';
                removeSeat(icon.parentNode.querySelector('p').innerText);
            } else {
                icon.style.color = 'green';
                addSeat(icon.parentNode.querySelector('p').innerText);
            }
        }

        function addSeat(seat) {
            var seatNumberElement = document.createElement('p');
            seatNumberElement.classList.add('Choice');
            seatNumberElement.innerText = seat;

            document.querySelector('.seat-number').appendChild(seatNumberElement);
        }

        function removeSeat(seat) {
            var seatElements = document.querySelectorAll('.seat-number p.Choice');
            seatElements.forEach(function(seatElement) {
                if (seatElement.innerText === seat) {
                    seatElement.remove();
                }
            });
        }

        function updateTotalPrice() {
            var seatElements = document.querySelectorAll('.seat-number p.Choice');
            var totalPrice = seatElements.length * <?php echo $row['harga_weekend']; ?>;
            document.querySelector('.price').innerText = 'Rp.' + totalPrice.toLocaleString('id-ID'); // Format harga ke dalam format mata uang Indonesia
        }
    </script>




    </body>

</html>