<?php
    $b = 4 != 4;
    $c = 3 + 7 == 10;
    $a = ($b and $c);

    echo "\$a = $a <br>";
    $a = ($b or $c);
    echo "\$a = $a <br>";
    $a = ($b xor $c);
    echo "\$a = $a <br>";
    $a = (!$b or $c);
    echo "\$a = $a <br>";
    $a = $b && $c;
    echo "\$a = $a <br>";
    $a = $b || $c;
    echo "\$a = $a <br>";
?>