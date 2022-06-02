<?php

declare(strict_types=1);

namespace Src\Application\User\Domain;

use Src\Application\User\Domain\ValueObject\UserCellphone;
use Src\Application\User\Domain\ValueObject\UserEmail;
use Src\Application\User\Domain\ValueObject\UserFullName;
use Src\Application\User\Domain\ValueObject\UserId;
use Src\Application\User\Domain\ValueObject\UserPassword;
use Src\Application\User\Domain\ValueObject\UserStateId;
use Src\Application\User\Domain\ValueObject\UserTimeStamp;
use Src\Application\User\Domain\ValueObject\UserUserName;
use Src\Shared\Domain\Entity;

final class User extends Entity
{
    public $id;
    public $userName;
    public $name;
    public $email;
    public $cellphone;
    private $password;
    public $stateId;
    public $timeStamp;

    public function __construct(
        UserId $id,
        UserUserName $userName,
        UserFullName $name,
        UserEmail $email,
        UserCellphone $cellphone,
        UserPassword $password,
        UserStateId $stateId,
        UserTimeStamp $timeStamp
    )
    {
        $this->id = $id;
        $this->userName = $userName;
        $this->name = $name;
        $this->email = $email;
        $this->cellphone = $cellphone;
        $this->password = $password;
        $this->stateId = $stateId;
        $this->timeStamp = $timeStamp;
    }

    public function id(): UserId
    {
        return $this->id;
    }

    public function userName(): UserUserName
    {
        return $this->userName;
    }

    public function name(): UserFullName
    {
        return $this->name;
    }

    public function email(): UserEmail
    {
        return $this->email;
    }

    public function cellphone(): UserCellphone
    {
        return $this->cellphone;
    }

    public function stateId(): UserStateId
    {
        return $this->stateId;
    }

    public function timeStamp(): UserTimeStamp
    {
        return $this->timeStamp;
    }
}