<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // melakukan continue pada $i == 2
        for($i = 0; $i<5; $i++)
        {
            if($i == 2)
            {
                continue;
            }
            echo ("Nilai i : $i <br>");
        }
        echo ("Loop Selesai");
    ?>
</body>
</html>