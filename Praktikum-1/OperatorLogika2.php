<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $val1 = 0;
        $val2 = 0;
        echo "Operasi $val1 and $val2 adalah = ";
        echo $val1 && $val2;
        echo "<br>";
        echo "Operasi $val1 or $val2 adalah = ";
        echo $val1 || $val2;
        echo "<br>";
        echo "Operasi $val1 xor $val2 adalah = ";
        echo $val1 xor $val2;
        echo "<br>";

        $val1 = 0;
        $val2 = 1;
        echo "Operasi $val1 and $val2 adalah = ";
        echo $val1 && $val2;
        echo "<br>";
        echo "Operasi $val1 or $val2 adalah = ";
        echo $val1 || $val2;
        echo "<br>";
        echo "Operasi $val1 xor $val2 adalah = ";
        echo $val1 xor $val2;
        echo "<br>";

        $val1 = 1;
        $val2 = 0;
        echo "Operasi $val1 and $val2 adalah = ";
        echo $val1 && $val2;
        echo "<br>";
        echo "Operasi $val1 or $val2 adalah = ";
        echo $val1 || $val2;
        echo "<br>";
        echo "Operasi $val1 xor $val2 adalah = ";
        echo $val1 xor $val2;
        echo "<br>";

        $val1 = 1;
        $val2 = 1;
        echo "Operasi $val1 and $val2 adalah = ";
        echo $val1 && $val2;
        echo "<br>";
        echo "Operasi $val1 or $val2 adalah = ";
        echo $val1 || $val2;
        echo "<br>";
        echo "Operasi $val1 xor $val2 adalah = ";
        echo $val1 xor $val2;
        echo "<br>";
    ?>
</body>
</html>