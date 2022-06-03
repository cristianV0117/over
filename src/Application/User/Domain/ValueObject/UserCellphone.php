<?php

namespace Src\Application\User\Domain\ValueObject;

final class UserCellphone
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