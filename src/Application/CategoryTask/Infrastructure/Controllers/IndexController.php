<?php

declare(strict_types=1);

namespace Src\Application\CategoryTask\Infrastructure\Controllers;

use Src\Application\CategoryTask\Application\UseCase\Find\FindAllCategoryTaskUseCase;
use Src\Shared\Infrastructure\Controllers\Controller;

final class IndexController extends Controller
{
    private $useCase;

    public function __construct(FindAllCategoryTaskUseCase $useCase)
    {
        parent::__construct();
        $this->useCase = $useCase;
    }

    public function __invoke()
    {
        $response = $this->useCase->__invoke();

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
                "current" => '/categories-tasks'
            ]
        );
    }
}
