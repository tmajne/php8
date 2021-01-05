<?php

// switch na sterydach ;)

$httpStatusCode = 200;
//$httpStatusCode = '200';
$httpStatusCode = 20011;

switch ($httpStatusCode) {
    case 200:
    case 300:
        $switchMessage = 'ok';
        break;
    case 400:
        $switchMessage = 'not found';
        break;
    case 500:
        $switchMessage = 'server error';
        break;
    default:
        $switchMessage = 'unknown status code';
        break;
}

$matchMessage = match ($httpStatusCode) {
    200, 300 => 'ok',
    400 => 'not found',
    500 => 'server error',
    default => 'unknown status code',
};

var_dump($switchMessage);
var_dump($matchMessage);

// właściwości
/*
    - match zwraca wartość !!! (pojedynczą)
    - match do porównania używa '===' a switch '=='
    - match nie potrzebuje "break"
    - w przypadku dopasowania wykonuje się tylko instrukcja z nim powiązania, nie przechodzi dalej jak w switch bez break
    - wiele warunków można połączyć ze sobą za pomocą przecinka
    - zgłasza UnhandledMatchError kiedy zabraknie sekcji default a my przekażemy wartość której nie uda się dopasować
    - można zgłaszać wyjątki w wyrażaniach (używamy nowy ficzer PHP8)
    - (-) obsługuje tylko pojedyncze wyrażenia, nie obsługuje bloków
*/

$count = 10;
$matchMessage = match ($count) {
    10 => 'ten',
    20 => 'twenty'
};

/*
$count = 10;
$matchMessage = match ($count) {
    10 => {
        $foo = 'bar';
        $bar = 'foo';
    },
    20 => 'twenty'
};
*/

match ($httpStatusCode) {
    200, 300 => 'ok',
    400 => 'not found',
    500 =>  throw new Exception('server error'),
    default => 'unknown status code',
};