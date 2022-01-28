<?php

namespace Src\CategoryTask\Domain\Contracts;

use Src\CategoryTask\Domain\CategoryTask;
use Src\CategoryTask\Domain\ValueObjects\CategoryTaskId;

interface CategoryTaskRepositoryContract
{
    public function findAll(): ?array;

    public function findById(CategoryTaskId $id): ?CategoryTask;
}
