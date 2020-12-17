<?php

declare(strict_types=1);

namespace Php8\Promoted;

class ConstructorPropPromotion
{
    public function __construct(
        public string $foo,
        protected int $bar,
        private object $repository,
        private string $name = 'Tom'
    ) {
        echo "\n\ndo something\n\n";
    }
}
