<?php

declare(strict_types=1);

namespace Src\Application\User\Application\Save;

use Src\Application\User\Domain\Contracts\UserRepository;
use Src\Application\User\Domain\ValueObject\UserCellphone;
use Src\Application\User\Domain\ValueObject\UserEmail;
use Src\Application\User\Domain\ValueObject\UserFullName;
use Src\Application\User\Domain\ValueObject\UserPassword;
use Src\Application\User\Domain\ValueObject\UserStateId;
use Src\Application\User\Domain\ValueObject\UserTimeStamp;
use Src\Application\User\Domain\ValueObject\UserUserName;

final class SaveUser
{
    private $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(array $data, string $now)
    {
        return $this->repository->save(
            new UserUserName($data["user_name"]),
            new UserFullName([
                "firstName" => $data["first_name"],
                "secondName" => $data["second_name"],
                "firstLastName" => $data["first_last_name"],
                "secondLastName" => $data["second_last_name"]
            ]),
            new UserEmail($data["email"]),
            new UserCellphone($data["cellphone"]),
            new UserPassword($data["password"]),
            new UserStateId($data["state_id"]),
            new UserTimeStamp([
                "createdAt" => $now,
                "updatedAt" => $now
            ])
        );
    }
}