<?php

namespace Src\CategoryTask\Domain\Contracts;

interface CategoryTaskRepositoryContract
{
    public function findById(int $id);
}
