<?php

namespace Src\Application\User\Domain\ValueObject;

final class UserEmail
{
    private $value;

    public function __construct(?string $value)
    {
        $this->value = $value;
    }

    public function value(): ?string
    {
        return $this->value;
    }
}