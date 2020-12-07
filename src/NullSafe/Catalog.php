<?php

declare(strict_types=1);

namespace Php8\NullSafe;

class Catalog
{
    private array $elements = [];

    public function __construct()
    {
        $this->elements[] = new Element();
        $this->elements[] = new Element();
        $this->elements[] = new Element();
        $this->elements[] = new Element();
    }

    public function getElement(int $position): ?Element
    {
        return $this->elements[$position] ?? null;
    }
}
