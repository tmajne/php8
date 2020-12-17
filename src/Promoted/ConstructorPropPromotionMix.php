<?php

declare(strict_types=1);

namespace Php8\Promoted;

class ConstructorPropPromotionMix
{
    private int $count;

    public function __construct(
        public string $foo,
        int $count,
        int $bar
    ) {
        $this->count = $count;   
        //var_dump($bar);

        // for validation
        var_dump($this->foo);
    }
}