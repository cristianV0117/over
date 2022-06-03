<?php

namespace Src\Application\User\Domain\ValueObject;

final class UserFullName
{
    private $value;

    public function __construct(?array $value)
    {
        $this->value = $value;
    }

    public function value(): ?array
    {
        return $this->value;
    }

    public function firstName(): string
    {
        return $this->value["firstName"];
    }

    public function secondName(): string
    {
        return $this->value["secondName"];
    }

    public function firstLastName(): string
    {
        return $this->value["firstLastName"];
    }

    public function secondLastName(): string
    {
        return $this->value["secondLastName"];
    }

    public function name(): string
    {
        return $this->value["firstLastName"] . $this->value["secondLastName"];
    }

    public function fullName(): string
    {
        return $this->value["firstName"] . $this->value["secondName"] . $this->value["firstLastName"] . $this->value["secondLastName"];
    }
}