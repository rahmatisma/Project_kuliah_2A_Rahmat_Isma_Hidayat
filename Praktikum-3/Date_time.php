<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $skr = date("d/m/Y");
        echo "Sekarang adalah $skr <br>";
        $waktu = date("h:i:s A"); //A menunjukan AM atau Pm
        echo "Jama Menunjukan pukul : $waktu";
    ?>
</body>
</html>