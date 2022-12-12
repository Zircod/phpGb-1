<?php
$name = readline("Как Вас зовут?");

$taskQuestion = "Какая задача стоит перед вами сегодня?";
$timeQuestion = "Какая задача стоит перед вами сегодня?";

$task1 = readline($taskQuestion);
$time1 = (int)readline($timeQuestion);

$task2 = readline($taskQuestion);
$time2 = (int)readline($timeQuestion);

$task3 = readline($taskQuestion);
$time3 = (int)readline($timeQuestion);

$times = $time1 + $time2 + $time3;

echo "$name, сегодня у вас запланировано 3 приоритетных задачи на день:
- {$task1} ({$time1}ч)
- {$task2} ({$time2}ч)
- {$task3} ({$time3}ч)
Примерное время выполнения плана = {$times}ч";
