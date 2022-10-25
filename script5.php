<?php

//Написал функцию с применением рекурсии, проверяющую, есть ли название предмета в цепочке массива или нет.
//Функция принимает два аргумента: 1. Название предмета для поиска (например: «Ключ»). 2. Массив (где надо искать).

$box = [
    [
        0 => 'Тетрадь',
        1 => 'Книга',
        2 => 'Настольная игра',
        3 => [
            'Настольная игра',
            'Настольная игра',
        ],
        4 => [
            [
                'Ноутбук',
                'Зарядное устройство'
            ],
            [
                'Компьютерная мышь',
                'Набор проводов',
                [
                    'Фотография',
                    'Картина'
                ]
            ],
            [
                'Инструкция',
                [
                    'Ключ'
                ]
            ]
        ]
    ],
    [
        0 => 'Пакет кошачьего корма',
        1 => [
            'Музыкальный плеер',
            'Книга'
        ]
    ]
];

$name = (string)readline('Название предмета: ');
echo findThis($name, $box) ? 'Нашел!' : 'Нету!';

function findThis(string $nameThing, array $nameArray): bool
{
    foreach ($nameArray as $value) {
        if (is_array($value)) {
            if (findThis($nameThing, $value)) {
                return true;
            }
        } else {
            if ($nameThing === $value) {
                return true;
            }
        }
    }
    return false;
}