<?php

declare(strict_types=1);

namespace Src\Shared\Infrastructure\Helpers;

trait JsonResponse
{
    public function json(
        int $status,
        bool $error,
        $response,
        string $domain,
        ?array $dependencies): array
    {
        return [
            "status"      => $status,
            "error"       => $error,
            "message"     => $response,
            "current_url" => $domain . $dependencies['current']
        ];
    }
}
