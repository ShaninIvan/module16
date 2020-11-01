<?php
    $n = readline ('Введите число: ');

    $result = 'NO';
    
    if ($n == 1){ $result = 'YES';}

    while ($n>=2){
        if ($n == 2){
            $result = 'YES';
        break;
        }
        $n = $n/2;
    }

    echo $result;
?>
