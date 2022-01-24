<?php

declare(strict_types=1);

namespace Src\Home\Infrastructure\Controllers;

use Src\Shared\Infrastructure\Controllers\Controller;

final class HomeController extends Controller
{
    /**
     * @return array
     */
    public function __invoke(): array
    {
        return $this->jsonResponse(
            200,
            false,
            [
                "over" => "OVER API",
                "home" => "Bienvenido",
                "version" => "1.0.1"
            ],
            ['current' => '']
        );
    }
}
