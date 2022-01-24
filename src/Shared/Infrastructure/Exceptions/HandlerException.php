<?php

declare(strict_types=1);

namespace Src\Shared\Infrastructure\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

final class HandlerException extends ExceptionHandler
{
    /**
     * @return void
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {

        });
    }
}
