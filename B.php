<?php
    $n1 = readline('Введите число 1: ');
    $n2 = readline('Введите число 2: ');
    $n3 = readline('Введите число 3: ');

    $max = $n1;
    if ($n2>$n1){
        $max = $n2;
    } 
    if (($n3>$n1) && ($n3>$n2)) {
        $max = $n3;
    }

    echo $max;
?>
