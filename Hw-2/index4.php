<?php
/*
 * Доп задание, сделайте цикл выводящий числа от 1 до 100 включительно, каждое с новой строки, если встречается число
 *что делится на 3 вывести вместо него Fizz если на 5 то Buzz, если и то и то тогда вывести FizzBuzz, например
1
2
Fizz
3
4
Buzz
.
тут остальные
.
14
FizzBuzz

Постарайтесь чтобы условие проверки на деление на 3 и 5 были по одному разу.
 */
//for ($i = 1; $i <= 100; $i++) {
//
//    $fizz = $i % 3;
//    $buzz = $i % 5;
//    if ($buzz == 0 && $fizz == 0) {
//        echo "FizzBuzz\n";
//    } elseif ( $fizz == 0) {
//        echo "Fizz\n";
//    } elseif ($buzz == 0) {
//        echo "Buzz\n";
//    } else {
//        echo "$i\n";
//    }
//
//}


//
for ($i = 1; $i <= 100; $i++) {

    $fizz = ($i % 3 == 0);
    $buzz = ($i % 5 == 0);

    if ($fizz) {
        echo "Fizz";
    }
    if ($buzz) {
        echo "Buzz";
    }
    if (!$fizz && !$buzz) {
        echo $i;
    }
    echo "\n";
}
