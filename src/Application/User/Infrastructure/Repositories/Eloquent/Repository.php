<?php

namespace Src\Application\User\Infrastructure\Repositories\Eloquent;

use Src\Application\User\Domain\Contracts\UserRepository;
use Src\Application\User\Domain\ValueObject\UserId;
use Src\Application\User\Domain\User;
use Src\Application\User\Domain\ValueObject\UserCellphone;
use Src\Application\User\Domain\ValueObject\UserEmail;
use Src\Application\User\Domain\ValueObject\UserFullName;
use Src\Application\User\Domain\ValueObject\UserPassword;
use Src\Application\User\Domain\ValueObject\UserStateId;
use Src\Application\User\Domain\ValueObject\UserTimeStamp;
use Src\Application\User\Domain\ValueObject\UserUserName;
use Src\Application\User\Infrastructure\Repositories\Eloquent\User as Model;

class Repository implements UserRepository
{
    private $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function findAll(): array
    {
        $objects = [];

        $users = $this->model->all();
        
        foreach ($users as $user) {
            $objects[] = new User(
                new UserId($user->id),
                new UserUserName($user->user_name),
                new UserFullName([
                    "firstName" => $user->first_name,
                    "secondName" => $user->second_name,
                    "firstLastName" => $user->first_last_name,
                    "secondLastName" => $user->second_last_name
                ]),
                new UserEmail($user->email),
                new UserCellphone($user->cellphone),
                new UserPassword(null),
                new UserStateId($user->state_id),
                new UserTimeStamp([
                    "createdAt" => $user->created_at,
                    "updatedAt" => $user->updated_at
                ])
            );
        }

        return $objects;
    }
}
