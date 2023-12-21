<?php
include "proses/connect.php";
$query = mysqli_query($conn, "SELECT * FROM tb_ticket
    RIGHT JOIN tb_film ON tb_film.nama_film = tb_ticket.nama_film");

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
    <link rel="stylesheet" href="/assets/css/home.css">
</head>
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
                                    <a href='/?x=DetailUpcoming&Upcoming= $film[id_film]'&meja='$film[nama_film]' class='btn btn-primary d-grid me-1'>Info </a>
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
</div>

<body>
</body>

</html>