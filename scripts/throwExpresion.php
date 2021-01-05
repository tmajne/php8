<?php

include_once "../vendor/autoload.php";

/*
 Zgłaszanie wyjątków tam gdzie są oczekiwane pojedyncze wyrażenia:
    - funkcje strzałkowe (arrow function)
    - ternary expresion
    - match
    - ...
 */

$fn = fn() => throw new \Error(message: 'Error from arrow function');
//$fn();

//$foo = $bar['key'] ?? throw new \Exception(message: 'Exception');