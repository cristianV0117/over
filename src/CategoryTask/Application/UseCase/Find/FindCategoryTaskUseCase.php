<?php

declare(strict_types=1);

namespace Src\CategoryTask\Application\UseCase\Find;

use Src\CategoryTask\Domain\Contracts\CategoryTaskRepositoryContract;
use Src\CategoryTask\Domain\ValueObjects\CategoryTaskId;
use Src\Shared\Domain\Entity;

class FindCategoryTaskUseCase
{
    private $repository;

    public function __construct(CategoryTaskRepositoryContract $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(int $id): Entity
    {
        return $this->repository->findById(new CategoryTaskId($id));
    }
}
