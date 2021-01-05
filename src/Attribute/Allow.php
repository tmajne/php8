<?php

declare(strict_types=1);

namespace Php8\Attribute;

use Attribute;

#[Attribute]
class Allow
{
    public function __construct(
        private string $role,
        private mixed $resource
    ) {}
}
