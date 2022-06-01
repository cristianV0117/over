<?php

declare(strict_types=1);

namespace Src\Application\CategoryTask\Domain\ValueObjects;

final class CategoryTaskCreatedAt
{
    private $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public function value(): string
    {
        return $this->value;
    }
}
