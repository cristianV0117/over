<?php

declare(strict_types=1);

namespace Src\CategoryTask\Application\UseCase\Find;

use Src\CategoryTask\Domain\Contracts\CategoryTaskRepositoryContract;

class FindCategoryTaskUseCase
{
    private $repository;

    public function __construct(CategoryTaskRepositoryContract $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(int $id): int
    {
        return $this->repository->findById($id);
    }
}
