<?php

declare(strict_types=1);

namespace Php8\Attribute;

use Attribute;

//#[Attribute]
//class Deprecated{}


#[Attribute(Attribute::IS_REPEATABLE|Attribute::TARGET_ALL)]
class Deprecated
{
    public function __construct(
        private string $message = '!!! Deprecated !!!'
    ) {}
}
