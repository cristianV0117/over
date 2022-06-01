<?php

declare(strict_types=1);

namespace Src\Status\System\Infrastructure\Controllers;

use Illuminate\Support\Facades\DB;
use Src\Shared\Infrastructure\Controllers\Controller;
use Src\Status\System\Domain\Exceptions\StatusNotResponseException;
use Illuminate\Http\JsonResponse;

final class StatusController extends Controller
{
    private $DB;

    public function __construct()
    {
        parent::__construct();
        $this->DB = new DB;
    }

    /**
     * @throws StatusNotResponseException
     */
    public function __invoke(): ?JsonResponse
    {
        try {
            $this->connection();
            return $this->jsonResponse(
                200,
                false,
                "OK",
                ['current' => '/status']
            );
        } catch (\Exception $e) {
            throw new StatusNotResponseException("¡NOT OK!", 503);
        }
    }

    private function connection(): void
    {
        $this->DB::connection()->getPDO();
    }
}
