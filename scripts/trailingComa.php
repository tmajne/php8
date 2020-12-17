<?php

declare(strict_types=1);

include_once "../vendor/autoload.php";

function foo1 (string $text, int $number) {
   print_r(func_get_args());
}

function foo2 (
    string $text,
    int $number,
) {
    print_r(func_get_args());
}


//foo1('text 1', 11);
//foo1('text 2', 22,);

foo2('text 3', 33);
foo2('text 4', 44,);


