<?php

namespace Src\Application\User\Domain\ValueObject;

final class UserTimeStamp
{
    private $value;

    public function __construct(array $value)
    {
        $this->value = $value;
    }

    public function value(): array
    {
        return $this->value;
    }

    public function createdAt(): string
    {
        return $this->value["createdAt"];
    }

    public function updatedAt(): string
    {
        return $this->value["updatedAt"];
    }
}