<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        date_default_timezone_set('Asia/jakarta');
        $d = date("D");
        $date = date("d-m-Y H:i:s");
        if ($d == "Mon"){
            $d = "Senin";
            echo "Selamat belajar <br>";
        }
        else
            echo "Ini hari $d <br>";
            echo $d . " " . $date;
    ?>
</body>
</html>