<?php

namespace Src\CategoryTask\Domain\Contracts;

use Src\CategoryTask\Domain\CategoryTask;

interface CategoryTaskRepositoryContract
{
    public function findById(int $id): CategoryTask;
}
