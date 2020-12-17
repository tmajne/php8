<?php

declare(strict_types=1);

namespace Php8\Promoted;

class ConstructorNoPromotionPhp7
{
    public string $foo;
    protected int $bar;
    private object $repository;
    private string $name = 'Tom';

    public function __construct(
        string $foo,
        int $bar,
        object $repository,
        string $name = 'Tom'
    ) {
        $this->foo = $foo;
        $this->bar = $bar;
        $this->repository = $repository;
        $this->name = $name;
    }
}
