<?php
/*
 * сформируйте окончание по числу яблок, 1 яблоко, 2 яблока, и т.д. должно работать для любого числа.
 */

for ($i = 1; $i <= 100; $i++) {
    $i10 = $i % 10;
    $i100 = $i % 100;

    if ($i100 >= 10 && $i100 < 20) {
        echo "$i яблок";
    } else {
        switch ($i10 % 10) {
            case 1:
                echo "$i яблоко";
                break;
            case 2:
            case 3:
            case 4:
                echo "$i яблока";
                break;
            default:
                echo "$i яблок";
        }
    }
    echo PHP_EOL;
}

