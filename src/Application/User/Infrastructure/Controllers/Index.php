<?php

declare(strict_types=1);

namespace Src\Application\User\Infrastructure\Controllers;

use Src\Application\User\Application\Find\FindAllUsers;
use Src\Shared\Infrastructure\Controllers\Controller;

final class Index extends Controller
{
    private $findAllUsersUseCase;

    public function __construct(FindAllUsers $findAllUsersUseCase)
    {
        parent::__construct();
        $this->findAllUsersUseCase = $findAllUsersUseCase;
    }

    public function __invoke()
    {
        $response = $this->findAllUsersUseCase->__invoke();

        $serializeArray = array_map(function ($value) {
            return $value->toArray();
        }, $response);

        return $this->jsonResponse(
            200,
            false,
            [
                $serializeArray
            ],
            [
                "current" => '/users'
            ]
        );
    }
}