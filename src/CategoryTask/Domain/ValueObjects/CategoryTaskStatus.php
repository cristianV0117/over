<?php

declare(strict_types=1);

namespace Src\CategoryTask\Domain\ValueObjects;

final class CategoryTaskStatus
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
