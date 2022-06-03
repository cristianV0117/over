<?php

namespace Src\Application\User\Domain\ValueObject;

final class UserPassword
{
    private $value;

    public function __construct(?string $value)
    {
        $this->value = $value;
        $this->encryptPassword();
    }

    public function value(): ?string
    {
        return $this->value;
    }

    private function encryptPassword(): void
    {
        $this->value = password_hash($this->value, PASSWORD_DEFAULT);
    }
}