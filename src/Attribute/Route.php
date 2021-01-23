<?php

declare(strict_types=1);

namespace Php8\Attribute;

/**
 * Możemy ograniczyć zastosowanie do konkretnych typów, np klasy metody
 * Musimy wtedy przekazać pierwszy argument do definicji atrybutu jako maska bitowa
 */

use Attribute;

#[Attribute(Attribute::TARGET_METHOD|Attribute::TARGET_FUNCTION)]
class Route
{
    public function __construct(
        private string $path
    ) {}
}
