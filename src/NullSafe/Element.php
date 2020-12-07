<?php

declare(strict_types=1);

namespace Php8\NullSafe;

class Element
{
    public function foo(): string
    {
        return 'foo from element';
    }
}
