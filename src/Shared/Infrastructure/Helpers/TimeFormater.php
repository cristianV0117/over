<?php

declare(strict_types=1);

namespace Src\Shared\Infrastructure\Helpers;

use Illuminate\Support\Carbon;

trait TimeFormater
{
    public function now(): string
    {
        return Carbon::now()->toDateTimeString();
    }
}