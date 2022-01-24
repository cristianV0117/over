<?php

namespace Src\CategoryTask\Infrastructure\Repositories\Eloquent;

use Src\CategoryTask\Domain\Contracts\CategoryTaskRepositoryContract;
use Src\CategoryTask\Domain\CategoryTask;
use Src\CategoryTask\Domain\ValueObjects\CategoryTaskCategory;
use Src\CategoryTask\Domain\ValueObjects\CategoryTaskDescription;
use Src\CategoryTask\Domain\ValueObjects\CategoryTaskId;
use Src\CategoryTask\Domain\ValueObjects\CategoryTaskStatus;
use Src\CategoryTask\Infrastructure\Repositories\Eloquent\CategoryTask as Model;

class EloquentRepository implements CategoryTaskRepositoryContract
{
    private $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function findById(int $id): CategoryTask
    {
        $model = $this->model->find($id)->toArray();
        return new CategoryTask(
            new CategoryTaskId($model["id"]),
            new CategoryTaskCategory($model["category"]),
            new CategoryTaskDescription($model["description"]),
            new CategoryTaskStatus($model["status"])
        );
    }
}
