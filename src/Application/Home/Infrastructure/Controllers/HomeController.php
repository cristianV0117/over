<?php

declare(strict_types=1);

namespace Src\Application\Home\Infrastructure\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Router;
use Src\Shared\Infrastructure\Controllers\Controller;
use Src\Shared\Infrastructure\Helpers\RouteHelper;

final class HomeController extends Controller
{
    use RouteHelper;

    /**
     * @param Router $router
     * @return JsonResponse
     */
    public function __invoke(Router $router): JsonResponse
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
