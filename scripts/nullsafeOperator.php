<?php

declare(strict_types=1);

use Php8\NullSafe\Catalog;

include_once "../vendor/autoload.php";

/*
 TypeScript i Kotlin
 */

$catalog = new Catalog();

$position = 11;

$element = $catalog->getElement($position);
if ($element) {
    $foo = $element->foo();
} else {
    $foo = null;
}
var_dump($foo);


$foo = $catalog->getElement($position) 
    ? $catalog->getElement($position)->foo() : null;
var_dump($foo);


$foo = $catalog->getElement($position)?->foo();
var_dump($foo);