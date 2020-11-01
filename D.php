<?php
    $letter = readline('Выберите букву: D - дуб, O - орех, P - пшено, N - ничего.');

    switch ($letter){
        case 'D': 
            echo 'Tri raza v zub!';
        break;
        case 'O':
            echo 'Na kogo greh?';
        break;
        case 'P':
            echo 'Mi s tobou za odno!';
        break;
        case 'N':
            echo 'Viberay!';
        break;
    }
?>
