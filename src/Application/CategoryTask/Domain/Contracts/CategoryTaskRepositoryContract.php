<?php

namespace Src\Application\CategoryTask\Domain\Contracts;

use Src\Application\CategoryTask\Domain\CategoryTask;
use Src\Application\CategoryTask\Domain\ValueObjects\CategoryTaskId;

interface CategoryTaskRepositoryContract
{
    public function findAll(): ?array;

    public function findById(CategoryTaskId $id): ?CategoryTask;
}
