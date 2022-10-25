<?php

function sum(int $x, int $y): string
{
    return (string)($x + $y);
}

function diff(int $x, int $y): string
{
    return (string)($x - $y);
}

function multi(int $x, int $y): string
{
    return (string)($x * $y);
}

function div(float $x, float $y): ?float
{
    return $y != 0 ? $x / $y : null;
}