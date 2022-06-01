<?php

namespace Src\Application\CategoryTask\Infrastructure\Repositories\Eloquent;

use Src\Application\CategoryTask\Domain\Contracts\CategoryTaskRepositoryContract;
use Src\Application\CategoryTask\Domain\CategoryTask;
use Src\Application\CategoryTask\Domain\ValueObjects\CategoryTaskCategory;
use Src\Application\CategoryTask\Domain\ValueObjects\CategoryTaskDescription;
use Src\Application\CategoryTask\Domain\ValueObjects\CategoryTaskId;
use Src\Application\CategoryTask\Domain\ValueObjects\CategoryTaskStatus;
use Src\Application\CategoryTask\Infrastructure\Repositories\Eloquent\CategoryTask as Model;

class Repository implements CategoryTaskRepositoryContract
{
    private $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function findById(CategoryTaskId $id): ?CategoryTask
    {
        $model = $this->model->find($id->value())->toArray();
        return new CategoryTask(
            new CategoryTaskId($model["id"]),
            new CategoryTaskCategory($model["category"]),
            new CategoryTaskDescription($model["description"]),
            new CategoryTaskStatus($model["status"])
        );
    }

    public function findAll(): array
    {
        $objects = [];

        $categoriesTasks = $this->model->all();

        foreach ($categoriesTasks as $categorie) {
            $objects[] = new CategoryTask(
                new CategoryTaskId($categorie->id),
                new CategoryTaskCategory($categorie->category),
                new CategoryTaskDescription($categorie->description),
                new CategoryTaskStatus($categorie->status)
            );
        }

        return $objects;
    }
}
