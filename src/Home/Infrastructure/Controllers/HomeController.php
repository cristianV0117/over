<?php

declare(strict_types=1);

namespace Src\Home\Infrastructure\Controllers;

use Illuminate\Routing\Router;
use Src\Shared\Infrastructure\Controllers\Controller;
use Src\Shared\Infrastructure\Helpers\RouteHelper;

final class HomeController extends Controller
{
    use RouteHelper;
    /**
     * @param Router $router
     * @return array
     */
    public function __invoke(Router $router): array
    {
        return $this->jsonResponse(
            200,
            false,
            [
                "over" => "OVER API",
                "home" => "Bienvenido",
                "version" => "1.0.1",
                "hateoas" => $this->routes($router->getRoutes())
            ],
            ['current' => '']
        );
    }
}
