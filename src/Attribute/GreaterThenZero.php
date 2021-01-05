<?php

declare(strict_types=1);

namespace Php8\Attribute;

use Attribute;

#[Attribute(Attribute::TARGET_PARAMETER|Attribute::TARGET_PROPERTY)]
class GreaterThenZero
{

}
