<?php

declare(strict_types=1);

namespace Src\System\Infrastructure\Controllers;

use Illuminate\Support\Facades\DB;
use Src\Shared\Infrastructure\Controllers\Controller;

final class StatusController extends Controller
{
    public function __invoke()
    {
        if(DB::connection()->getDatabaseName()) {
            return $this->jsonResponse(
                200,
                false,
                [
                    "message" => "OK",
                ],
                ['current' => '/status']
            );
        }
    }
}
