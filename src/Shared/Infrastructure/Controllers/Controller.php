<?php

declare(strict_types=1);

namespace Src\Shared\Infrastructure\Controllers;

use App\Http\Controllers\Controller as BaseController;
use Src\Shared\Infrastructure\Helpers\JsonResponse;

class Controller extends BaseController
{
    use JsonResponse;

    public $api;

    public function __construct()
    {
        $this->api = $_ENV["API_ROUTE"];
    }

    protected function jsonResponse(
        int $status,
        bool $error,
        $response,
        ?array $dependencies
    ): array
    {
        return $this->json(
           $status,
           $error,
           $response,
           $this->api,
           $dependencies
        );
    }
}
