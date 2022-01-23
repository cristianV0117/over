<?php

namespace Src\Home\Controllers;

use Src\Shared\Controllers\Controller;

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
            null
        );
    }
}
