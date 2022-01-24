<?php

namespace Src\Shared\Infrastructure\Helpers;

trait RouteHelper
{
    public function routes(object $router): array
    {
        $response = [];
        $routes = collect($router->getRoutes())->map(function ($route) {
            if ($route->methods()[0] == "GET") {
                return $_ENV["DOMAIN_ROUTE"] . "/" . $route->uri();
            }
        });
        foreach ($routes as $key => $value) {
            $search = strpos($value, "_");
            if (is_numeric($search) || is_null($value) || $value == $_ENV["DOMAIN_ROUTE"] . "/" . "sanctum/csrf-cookie" || str_contains($value, '{')) {
                unset($routes[$key]);
            } else {
                $response[] = $value;
            }
        }
        return array_values($response);
    }
}
