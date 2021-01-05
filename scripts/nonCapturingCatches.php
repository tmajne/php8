<?php

// PHP <= 7.4
try {
    // do something
    throw new InvalidArgumentException('Wrong argument');
} catch (InvalidArgumentException $exception) {
    var_dump("Some argument is wrong");
}

// PHP >= 8.0
/**
 * Jeśli nie potrzebujemy odwoływać się do danych przechwyconego błędu/wyjątku
 * możemy ominąć przypisanie go do zmiennej
 * jednak typ przechwytywanego błędu musi być zawsze
 */
try {
    // do something
    throw new InvalidArgumentException('Wrong argument');
} catch (InvalidArgumentException) {
    var_dump("Some argument is wrong");
}