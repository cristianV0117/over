<?php

declare(strict_types=1);

namespace Src\CategoryTask\Application\UseCase\Find;

use Src\CategoryTask\Infrastructure\Repositories\Eloquent\Repository;

final class FindAllCategoryTaskUseCase
{
    private $repository;

    public function __construct(Repository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke()
    {
        return $this->repository->findAll();
    }
}
