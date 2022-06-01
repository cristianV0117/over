<?php

declare(strict_types=1);

namespace Src\Application\CategoryTask\Application\UseCase\Find;

use Src\Application\CategoryTask\Infrastructure\Repositories\Eloquent\Repository;

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
