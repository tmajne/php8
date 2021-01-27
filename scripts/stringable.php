<?php

declare(strict_types=1);

class SampleClass implements Stringable
{
    public function __toString(): string
    {
        return 'string class';
    }
}


function printer(string|Stringable $param) {
    echo "$param\n";
}


$sampleObject = new SampleClass();

printer('some string');
printer($sampleObject);

/**
 * Jeśli klasa implementuje już metodę magiczną __toString to php automatycznie oznacza ją jako Stringable
 * i nie trzeba deklarować tego ręcznie (nie trzeba, ale można)
 */