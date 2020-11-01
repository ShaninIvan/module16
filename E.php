<?php
    $lowN = readline('Введите нижнюю границу: ');
    $highN = readline('Введите верхнюю границу: ');

    if ($lowN > $highN){
        $temp = $lowN;
        $lowN = $highN;
        $highN = $temp;
    }

    for ($i = $lowN; $i<=$highN; $i++){
        if ($i % 2 == 0) {echo $i.' ';}
    }
?>
