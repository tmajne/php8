<?php

declare(strict_types=1);

namespace Php8;

class NamedArguments
{
    public function __construct(
        int $page,
        int $count = 20
    ) {
        //print_r(func_get_args());
    }

    public function foo(
        string $title, 
        ?string $description = null, 
        array $options = []
    ): void {
        var_dump(func_get_args());
    }

    public function bar(
        string $title, 
        ?string $description, 
        array $options = []
    ): void {
        var_dump(func_get_args());
    }
}
