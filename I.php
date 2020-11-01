<?php
    function recPow($a, $n){
        if ($n == 0){return 1;}

        return $a*recPow($a, $n-1);
    }

    $a = readline('Введите основу: ');
    $n = readline('Введите степень: ');

    echo recPow($a, $n);
?>
