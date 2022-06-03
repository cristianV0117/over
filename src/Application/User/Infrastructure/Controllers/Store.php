<?php

declare(strict_types=1);

namespace Src\Application\User\Infrastructure\Controllers;

use Src\Application\User\Application\Save\SaveUser;
use Src\Application\User\Infrastructure\Request\StoreRequest;
use Src\Shared\Infrastructure\Controllers\Controller;
use Src\Shared\Infrastructure\Helpers\TimeFormater;

final class Store extends Controller
{
    use TimeFormater;

    private $saveUserUseCase;

    public function __construct(SaveUser $saveUserUseCase)
    {
        parent::__construct();
        $this->saveUserUseCase = $saveUserUseCase;
    }

    public function __invoke(StoreRequest $request)
    {
        $response = $this->saveUserUseCase->__invoke($request->all(), $this->now());

        return $this->jsonResponse(
            201,
            false,
            $response->toArray(),
            ["current" => null]
        );
    }
}