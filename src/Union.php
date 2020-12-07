<?php

declare(strict_types=1);

namespace Php8;

use stdClass;

/*
 TypeScript - union
 */

class Union
{
    private int|string|stdClass $foo;
    private int|null $bar = null;
    //private ?int $bar;

    public float|string $zet;
    public object $object;

    public function __construct(int|string|stdClass $foo)
    {
        $this->foo = $foo;

        $this->zet = 'zet';
        $this->object = new stdClass();
    }

    /**
     * void - nie może być użyty w union
     */
    public function getFoo(): int|string|stdClass
    {
        return $this->foo;
    }

    public function setFoo(int|string $foo): void
    {
        $this->foo = $foo;
    }

    public function setBarOne(int|null $bar): void
    {
        $this->bar = $bar;
    }

    public function getBarOne(): int|null
    {
        return $this->bar;
    }

    public function setBarTwo(?int $bar): void
    {
        $this->bar = $bar;
    }

    public function getBarTwo(): ?int
    {
        return $this->bar;
    }
}
