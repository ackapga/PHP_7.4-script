<?php

//  Скрипт командной строки, выполняющий перемножение элементов двух массивов.
$arr1 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$arr2 = range(1, 10);
$multiple = [];

for ($i = 0; $i < count($arr1); $i++) {
    $multiple[] = $arr1[$i] * $arr2[$i];
}

print_r($multiple);

// Скрипт генераций поздравления, спрашивающий имя и сколько пожеланий надо.
$epithets = ['бесконечного', 'постоянного', 'невероятного', 'космического'];
$wishes = ['счастья', 'здоровья', 'благополучия', 'воображения', 'терпения'];
$random_congratulation = [];

$name = readline("Назовите ваше имя. ");
$name = ucfirst($name);

do {
    $number = (int)readline('Сколько пожеланий? ');
} while ($number <= 0);

for ($i = 0; count($random_congratulation) < $number; $i++) {
    $randWishes = array_rand($wishes);
    $randEpithets = array_rand($epithets);
    $random_congratulation[] = $epithets[$randEpithets] . ' ' . $wishes[$randWishes];
}

$last = array_pop($random_congratulation);
$random_congratulation[] = 'и ' . $last;

$string_congratulation = implode(", ", $random_congratulation);

echo "$name, от всего сердца поздравляю тебя с Днем Рождения, желаю $string_congratulation.";

// Вычислил среднее значение баллов каждой группы и вывел самый высоки.
// Составить список на отчисление, имеющие оценку ниже трёх.
$studentsList = [
    'БАП1320' => [
        'Смирнова Христина Потаповна' => 5,
        'Рогозин Даниил Арсениевич' => 3,
        'Золин Владилен Леонтиевич' => 4,
        'Архаткина Владислава Никитевна' => 4,
        'Мещерякова Мария Елизаровна' => 2,
        'Саврасова Фаина Ивановна' => 2,
        'Хромченко Зинаида Николаевна' => 2,
        'Протасова Майя Леонидовна' => 4,
    ],
    'ИТ1720' => [
        'Ябров Тимур Чеславович' => 2,
        'Белорусов Ефрем Изяславович' => 3,
        'Ягода Назар Прохорович' => 4,
        'Ярилова Розалия Серафимовна' => 5,
        'Нырко Платон Вадимович' => 1,
        'Калинин Агап Моисеевич' => 2,
        'Никифоров Юлиан Прокофиевич' => 3
    ]
];

$exclude = [];
foreach ($studentsList as $groups => $nameStudent) {
    $averageGrade[$groups] = array_sum($nameStudent) / count($nameStudent);

    foreach ($nameStudent as $studentName => $ball) {
        if ($ball < 3) {
            $exclude[$groups][] = $studentName;
        }
    }
}
arsort($averageGrade);
$topGroup = array_key_first($averageGrade);

echo "Наивысший средний бал у группы:\n $topGroup = $averageGrade[$topGroup] ;" . PHP_EOL;
echo "Список студентов на отчисление:" . PHP_EOL;
print_r($exclude);