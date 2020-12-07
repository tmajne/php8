<?php

declare(strict_types=1);

include_once "../vendor/autoload.php";

use Php8\MixedType;

//$mixed = new MixedType(null);
//$mixed = new MixedType(434);
//$mixed = new MixedType(55.9);
//$mixed = new MixedType(new stdClass());
$mixed = new MixedType(true);

$foo = $mixed->getFoo();

var_dump($foo);