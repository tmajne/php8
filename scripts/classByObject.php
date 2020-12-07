<?php

declare(strict_types=1);

include_once "../vendor/autoload.php";

use Php8\MixedType;

$object = new MixedType(['bar']);

$classByClass = MixedType::class;
$classByObject = $object::class;

var_dump($classByClass);
var_dump($classByObject);