<?php

declare(strict_types=1);

namespace Src\Application\User\Domain\Contracts;

interface UserRepository
{
    public function findAll(): ?array;
}