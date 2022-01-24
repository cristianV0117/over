<?php

declare(strict_types=1);

namespace Src\System\Infrastructure\Controllers;

use Illuminate\Support\Facades\DB;
use Src\Shared\Infrastructure\Controllers\Controller;
use Src\System\Infrastructure\Handlers\StatusNotResponseException;

final class StatusController extends Controller
{
    /**
     * @throws StatusNotResponseException
     */
    public function __invoke()
    {
        try {
            DB::connection()->getPDO();
            return $this->jsonResponse(
                200,
                false,
                [
                    "message" => "OK",
                ],
                ['current' => '/status']
            );
        } catch (\Exception $e) {
            throw new StatusNotResponseException("¡NOT OK!", 500);
        }
    }
}
