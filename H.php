<?php
    function isPrime($number){
        
        $result = 'prime';

        if ($number == 1){return $result;}

        $sqrtN = round(sqrt($number));

        for ($i = 2; $i<=$sqrtN; $i++){
            if ($number % $i == 0){
                $result = 'composite';
            }
        }

        return $result;
    }

    $number = readline('Введите натуральное число до 2000000000: ');

    echo isPrime($number);
?>
