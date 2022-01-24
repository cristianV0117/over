<?php

declare(strict_types=1);

namespace Src\CategoryTask\Application\UseCase\Find;

class FindCategoryTaskUseCase
{
    public function __construct()
    {
    }

    public function __invoke(int $id): int
    {
        return $id;
    }
}
