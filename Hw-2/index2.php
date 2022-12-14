<?php
/*Доработайте задание с прошлого занятия с использованием условных операторов и циклических конструкций. Реализуйте
скрипт, запрашивающий у пользователя количество задач, запланированных на день. После получения корректного числа,
программа должна спросить определённое количество раз, какая задача запланирована и сколько примерно времени займёт
её выполнение. По завершению циклического опроса необходимо вывести итог запланированного пользователем дня,
содержащий весь перечень задач с оценкой:
Иван, сегодня у вас запланировано 3 приоритетных задачи на день:
- Погулять с кошкой (1ч)
- Попить кофе (2ч)
- Полежать на диване (4ч)
Примерное время выполнения плана = 7ч*/

$name = readline("Как Вас зовут?");

task:
$numberTask = (int)readline("Количество задач, запланированных на день?");

if ($numberTask < 0 || $numberTask > 10) {
    echo "Введите корректное число\n";
    goto task;
}

$taskQuestion = "Какая задача стоит перед вами сегодня?";
$timeQuestion = "Сколько примерно времени эта задача займет?";

$resultTask = '';
$resultTime = '';
$times = 0;

for ($i = 1; $i <= $numberTask; $i++) {
    $task = readline($taskQuestion);
    $time = (int)readline($timeQuestion);
    $resultTask .= "-" . $task;
    $resultTime .= "-" . $time;
    $times += $time;
}

echo "$name, сегодня у вас запланировано {$numberTask} приоритетных задачи на день:\n";

for ($i = 1; $i <= $numberTask; $i++) {
    $resultTasks = explode("-", $resultTask);
    $resultTimes = explode("-", $resultTime);
    echo "- {$resultTasks[$i]} ({$resultTimes[$i]}ч)\n";
}

echo "Примерное время выполнения плана = {$times}ч";