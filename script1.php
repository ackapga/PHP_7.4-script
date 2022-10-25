<?php

// Скрипт спрашивает у пользователя его имя и возраст.
$name = readline("Введите ваше имя\n");
$age = readline("Сколько вам лет?\n");

echo "Вас зовут $name, Bам $age лет.";


//  Скрипт спрашивает планы на день.
$question1 = "Какая задача стоит перед вами сегодня?";
$question2 = "Сколько примерно эта задача займет у вас времени(Введите в часах)?";

$name = readline("Введите ваше имя: ");
$first = readline($question1);
$first_time = readline($question2);

$second = readline($question1);
$second_time = readline($question2);

$third = readline($question1);
$third_time = readline($question2);

$total = ($first_time + $second_time + $third_time);


echo "$name, сегодня у вас запланировано 3 приоритетных задачи на день:\n
- $first ($first_time ч)\n
- $second ($second_time ч)\n
- $third ($third_time ч)\n
Примерное время выполнения плана = $total ч";