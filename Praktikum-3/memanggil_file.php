<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require("contoh_require.php"); //akan dipanggil 1x saja
        //dalam file php ini
        tulistebal("Ini adalah tulisan tebal");
        echo "<br>";
        echo $a;    //mengambil nilai dari require
    ?>
</body>
</html>