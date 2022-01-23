<?php

namespace Src\Shared\Helpers;

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
            "current_url" => $domain . $dependencies
        ];
    }
}
