<?php

namespace Src\Application\User\Infrastructure\Services;

use Illuminate\Support\ServiceProvider;

final class DependencyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app
            ->when(\Src\Application\User\Application\Find\FindAllUsers::class)
            ->needs(\Src\Application\User\Domain\Contracts\UserRepository::class)
            ->give(\Src\Application\User\Infrastructure\Repositories\Eloquent\Repository::class);
    }
}