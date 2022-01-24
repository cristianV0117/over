<?php

declare(strict_types=1);

namespace Src\CategoryTask\Infrastructure\Controllers;

use Illuminate\Http\JsonResponse;
use Src\CategoryTask\Application\UseCase\Find\FindCategoryTaskUseCase;
use Src\Shared\Infrastructure\Controllers\Controller;

final class ShowController extends Controller
{
    private $useCase;

    public function __construct(FindCategoryTaskUseCase $useCase)
    {
        parent::__construct();
        $this->useCase = $useCase;
    }

    public function __invoke(int $id): JsonResponse
    {
        return $this->jsonResponse(
            200,
            false,
            [
                "id" => $this->useCase->__invoke($id)
            ],
            [
                "current" => '/categories-tasks/' . $id
            ]
        );
    }
}
