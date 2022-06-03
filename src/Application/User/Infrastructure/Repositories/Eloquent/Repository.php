<?php

namespace Src\Application\User\Infrastructure\Repositories\Eloquent;

use Src\Application\User\Domain\Contracts\UserRepository;
use Src\Application\User\Domain\Exceptions\StoreFailed;
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

    public function save(
        UserUserName $userName,
        UserFullName $name,
        UserEmail $email,
        UserCellphone $cellphone,
        UserPassword $password,
        UserStateId $stateId,
        UserTimeStamp $timeStamp
    ): ?User
    {
        $response = $this->model->create([
            'user_name' => $userName->value(),
            'first_name' => $name->firstName(),
            'second_name' => $name->secondLastName(),
            'first_last_name' => $name->firstLastName(),
            'second_last_name' => $name->secondLastName(),
            'email' => $email->value(),
            'cellphone' => $cellphone->value(),
            'password' => $password->value(),
            'state_id' => $stateId->value(),
            'createdAt' => $timeStamp->createdAt(),
            'updatedAt' => $timeStamp->updatedAt()
        ]);

        if (!$response) {
            throw new StoreFailed("Ha fallado el guardado de la información", 500);
        }
        
        return new User(
            new UserId($response->id),
            new UserUserName($response->user_name),
            new UserFullName([
                "firstName" => $response->first_name,
                "secondName" => $response->second_name,
                "firstLastName" => $response->first_last_name,
                "secondLastName" => $response->second_last_name
            ]),
            new UserEmail($response->email),
            new UserCellphone($response->cellphone),
            new UserPassword(null),
            new UserStateId($response->state_id),
            new UserTimeStamp([
                "createdAt" => $response->created_at,
                "updatedAt" => $response->updated_at
            ])
        );
    }
}
