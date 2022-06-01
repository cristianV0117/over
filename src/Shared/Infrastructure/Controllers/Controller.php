<?php

declare(strict_types=1);

namespace Src\Shared\Infrastructure\Controllers;

use App\Http\Controllers\Controller as BaseController;
use Illuminate\Http\JsonResponse;
use Src\Shared\Infrastructure\Helpers\JsonResponse as JsonHelper;

class Controller extends BaseController
{
    use JsonHelper;

    private $api;

    public function __construct()
    {
        $this->api = $_ENV["API_ROUTE"];
    }

    protected function jsonResponse(
        int $status,
        bool $error,
        $response,
        ?array $dependencies
    ): JsonResponse
    {
        return response()->json(
            $this->json(
                $status,
                $error,
                $response,
                $this->api,
                $dependencies
            ),
            $status
        );
    }
}
