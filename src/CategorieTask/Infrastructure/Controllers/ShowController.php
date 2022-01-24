<?php

declare(strict_types=1);

namespace Src\CategorieTask\Infrastructure\Controllers;

use Illuminate\Http\JsonResponse;
use Src\CategorieTask\Application\UseCase\Find\FindCategorieTaskUseCase;
use Src\Shared\Infrastructure\Controllers\Controller;

final class ShowController extends Controller
{
    private $useCase;

    public function __construct(FindCategorieTaskUseCase $useCase)
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
