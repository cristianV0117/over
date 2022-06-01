<?php

declare(strict_types=1);

namespace Src\Application\CategoryTask\Domain\ValueObjects;

final class CategoryTaskDescription
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
