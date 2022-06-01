<?php

namespace Src\Shared\Infrastructure\Services;

use Illuminate\Support\ServiceProvider;

class CategoryTaskService extends ServiceProvider
{
    public function register()
    {
        $this->app->when(\Src\Application\CategoryTask\Application\UseCase\Find\FindCategoryTaskUseCase::class)
            ->needs(\Src\Application\CategoryTask\Domain\Contracts\CategoryTaskRepositoryContract::class)
            ->give(\Src\Application\CategoryTask\Infrastructure\Repositories\Eloquent\Repository::class);
    }
}
