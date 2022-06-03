<?php

declare(strict_types=1);

namespace Src\Application\User\Domain\Contracts;

use Src\Application\User\Domain\User;
use Src\Application\User\Domain\ValueObject\UserCellphone;
use Src\Application\User\Domain\ValueObject\UserEmail;
use Src\Application\User\Domain\ValueObject\UserFullName;
use Src\Application\User\Domain\ValueObject\UserPassword;
use Src\Application\User\Domain\ValueObject\UserStateId;
use Src\Application\User\Domain\ValueObject\UserTimeStamp;
use Src\Application\User\Domain\ValueObject\UserUserName;

interface UserRepository
{
    public function findAll(): ?array;

    public function save(
        UserUserName $userName,
        UserFullName $name,
        UserEmail $email,
        UserCellphone $cellphone,
        UserPassword $password,
        UserStateId $stateId,
        UserTimeStamp $timeStamp
    ): ?User;
}