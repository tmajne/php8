<?php

declare(strict_types=1);

include_once "../vendor/autoload.php";

use Php8\Promoted\ConstructorNoPromotionPhp7;
use Php8\Promoted\ConstructorPropPromotion;
use Php8\Promoted\ConstructorPropPromotionMix;

//$noPromotion = new ConstructorNoPromotionPhp7('foo', 22, new stdClass());
//print_r($noPromotion);

//$promotion = new ConstructorPropPromotion('foo', 22, new stdClass());
//print_r($promotion);

$promotionMix = new ConstructorPropPromotionMix('foo', 100, 33);
print_r($promotionMix);