<?php

// THROW EXPRESSION

/*
 Zgłaszanie wyjątków tam gdzie są oczekiwane pojedyncze wyrażenia:
    - funkcje strzałkowe (arrow function)
    - ternary operator, ternary shorthand, null coalescing operator
    - match
    - ...
 */

$fn = fn() => throw new \Error(message: 'Error from arrow function');

try {
   $fn();
} catch (\Throwable $e) {
   var_dump($e->getMessage());
}

//$foo = $bar['key'] ?? throw new \Exception(message: 'Key not found');