<?php
/* Подготовьте два массива одинаковой размерности, но не менее 10 элементов, с произвольными числовыми значениями.
 * Разработайте скрипт для запуска из командной строки, выполняющий перемножение элементов двух массивов и выводящий
 * результат в консоль с помощью print_r. Умножение должно выполняться только между элементами соответствующих
 * индексов, то есть нулевой элемент первого массива умножается на нулевой элемент второго массива;
 */

$arr1 = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
$arr2 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$multiplication = [];

foreach ($arr1 as $key => $value) {
    $multiplication[] = $value * $arr2[$key];
}
print_r($multiplication);

