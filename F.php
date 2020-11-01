<?php
    $n = readline('Введите число N: ');

    $result = 0;
    for ($i = 1; $i<=$n; $i++){
        $result += $i;
    }

    echo $result;
?>