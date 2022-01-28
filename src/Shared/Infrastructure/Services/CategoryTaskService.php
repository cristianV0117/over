<?php

namespace Src\Shared\Infrastructure\Services;

use Illuminate\Support\ServiceProvider;

class CategoryTaskService extends ServiceProvider
{
    public function register()
    {
        $this->app->when(\Src\CategoryTask\Application\UseCase\Find\FindCategoryTaskUseCase::class)
            ->needs(\Src\CategoryTask\Domain\Contracts\CategoryTaskRepositoryContract::class)
            ->give(\Src\CategoryTask\Infrastructure\Repositories\Eloquent\Repository::class);
    }
}
