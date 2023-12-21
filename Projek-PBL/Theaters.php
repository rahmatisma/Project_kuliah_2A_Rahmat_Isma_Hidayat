<?php
include "proses/connect.php";
$query = mysqli_query($conn, "SELECT * FROM tb_theaters");

while ($record = mysqli_fetch_array($query)) {
    $result[] = $record;
}

$kota = mysqli_query($conn, "SELECT DISTINCT kota FROM tb_theaters");

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/theater.css">
</head>

<body>
    <div class="container mt-3" >
        <div class="heading-twenty">
            <h3>Theater</h3>
            <div class="select-twenty">
                <select class="custom-select" id="cityChanged">
                    <?php
                    foreach ($kota as $row) {
                        echo "<option><h3>$row[kota]</h3></option>";
                    }
                    ?>
                </select>
            </div>
        </div>

        <div class="row">
            <?php
            foreach ($result as $theater) {
                echo "<div class='col-12'>
            <div class='tab-container'>
            <div class='tab-content mt-3'>
                <table class='table'>
                    <tbody class='table-light'>
                        <tr>
                            <td class='col-md-8' style='background-color: #fdf8e8;'>
                                <a href=''>
                                    $theater[nama_theater]
                                </a>
                            </td>
                            <td class='col-md-4 text-end' style='background-color: #fdf8e8;'>
                                $theater[nohp]
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>";
            }
            ?>
        </div>
    </div>
</body>

</html>