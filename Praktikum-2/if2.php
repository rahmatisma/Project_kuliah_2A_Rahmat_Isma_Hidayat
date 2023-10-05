<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $d = date("D");
        if ($d == "Sat"){
            echo "Selamat berakhir pekan!";
        }
        elseif ($d == "Fri"){
            echo "Selamat menunaikan Sholat jum'at bagi yang muslim!";
        }
        else {
            echo "Selamat belajar!";
        }
    ?>
</body>
</html>