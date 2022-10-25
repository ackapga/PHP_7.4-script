<?php

$random = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

//  Разработал анонимную функцию для применения в качестве аргумента array_map,
//  возвращающую для каждого элемента массива строковое значение: «четное» или «нечетное».
$ackapgaFunction = function (int $arr): string {
    return $arr & 1 ? 'Нечетное.' : 'Четное.';
};

$result = array_map($ackapgaFunction, $random);

var_dump($result);

// Разработал функцию принимающую массив чисел. Результат массива содержащий: max, min, avg.
function findMaxMinAvg(array $number): array
{
    return [
        'max' => max($number),
        'min' => min($number),
        'avg' => array_sum($number) / count($number),
    ];
}

print_r(findMaxMinAvg($random));