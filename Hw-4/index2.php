<?php
/* 2. Разработайте функцию с объявленными типами аргументов и возвращаемого значения, принимающую в качестве аргумента
 * массив целых чисел. Результатом работы функции должен быть массив, содержащий три элемента: max — наибольшее
 * число, min — наименьшее число, avg — среднее арифметическое всех чисел массива;
 */

$arr = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];
$resultArr = [];

function foo (array $arr): array
{
    $resultArr['max'] = max($arr);
    $resultArr['min'] = min($arr);
    $resultArr['avg'] = round((array_sum($arr) / count($arr)), 2);

    return $resultArr;
}

var_dump(foo($arr));

//2ой вариант
function foo2 (array $arr): array
{
    return [
        'max' => max($arr),
        'min' => min($arr),
        'avg' => round((array_sum($arr) / count($arr)), 2),
    ];
}
var_dump(foo2($arr));