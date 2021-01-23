<?php

declare(strict_types=1);

use Php8\Attribute\GreaterThenZero;
use Php8\Attribute\Route;

include_once "../vendor/autoload.php";

class Controller
{
    #[Route(path: '/test/example')]
    #[Allow(role: 'admin')]
    public function testAction(
        #[GreaterThenZero] int $resourceId
    ): string {
        return 'Resource with ID: ' . $resourceId;
    }
}
