<?php

declare(strict_types=1);

namespace Src\Application\User\Application\Find;

use Src\Application\User\Domain\Contracts\UserRepository;

final class FindAllUsers
{
    private $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke()
    {
        return $this->repository->findAll();
    }
}