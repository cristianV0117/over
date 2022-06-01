<?php
/**
 * @author Cristian vasquez dev
 */

declare(strict_types=1);

namespace Src\Application\CategoryTask\Infrastructure\Controllers;

use Illuminate\Http\JsonResponse;
use Src\Application\CategoryTask\Application\UseCase\Find\FindCategoryTaskUseCase;
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
        $entity = $this->useCase->__invoke($id);
        return $this->jsonResponse(
            200,
            false,
            $entity->toArray(),
            [
                "current" => '/categories-tasks/' . $id
            ]
        );
    }
}
