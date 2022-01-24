<?php

declare(strict_types=1);

namespace Src\CategorieTask\Application\UseCase\Find;

class FindCategorieTaskUseCase
{
    public function __construct()
    {
    }

    public function __invoke(int $id): int
    {
        return $id;
    }
}
