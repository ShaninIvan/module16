<?php
$one = readline("Введите первое число: ");
$two = readline("Введите второе число: ");

if ($one>$two){
    $max = $one;
}else{
    $max = $two;
}

echo $max;
?>
