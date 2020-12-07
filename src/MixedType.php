<?php

declare(strict_types=1);

namespace Php8;

/*
    array
    bool
    callable
    int
    float
    null
    object
    resource
    string

    TypeScript - any
 */

class MixedType
{
    private mixed $foo;

    public function __construct(mixed $foo)
    {
        $this->foo = $foo;
    }

    public function getFoo(): mixed
    {
        return $this->foo;
    }

    /*public function getFooo(): ?mixed
    {
        return $this->foo;
    }*/
}
