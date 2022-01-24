<?php

namespace Src\CategoryTask\Infrastructure\Repositories\Eloquent;

use Src\CategoryTask\Domain\Contracts\CategoryTaskRepositoryContract;

class EloquentRepository implements CategoryTaskRepositoryContract
{
    public function findById(int $id)
    {
        return $id;
    }
}
