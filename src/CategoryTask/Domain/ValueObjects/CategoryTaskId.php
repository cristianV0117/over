<?php

declare(strict_types=1);

namespace Src\CategoryTask\Domain\ValueObjects;

final class CategoryTaskId
{
    private $value;

    public function __construct(int $value)
    {
        $this->value = $value;
    }

    public function value(): int
    {
        return $this->value;
    }
}
