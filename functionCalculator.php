<?php

require_once 'functions.php';

$action = readline('Введите одно из четырёх действий:' . PHP_EOL .
    '- sum' . PHP_EOL .
    '- diff' . PHP_EOL .
    '- multi' . PHP_EOL .
    '- div' . PHP_EOL
);

$firstNumber = (float)readline('Введите первое число' . PHP_EOL);
$secondNumber = (float)readline('Введите второе число' . PHP_EOL);

$mathOperation = function (float $x, float $y, string $operation): ?float {
    return function_exists($operation) ? $operation($x, $y) : null;
};

echo "Результат = {$mathOperation($firstNumber, $secondNumber, $action)}";