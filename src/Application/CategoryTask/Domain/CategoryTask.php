<?php

declare(strict_types=1);

namespace Src\Application\CategoryTask\Domain;

use Src\Application\CategoryTask\Domain\ValueObjects\CategoryTaskCategory;
use Src\Application\CategoryTask\Domain\ValueObjects\CategoryTaskDescription;
use Src\Application\CategoryTask\Domain\ValueObjects\CategoryTaskId;
use Src\Application\CategoryTask\Domain\ValueObjects\CategoryTaskStatus;
use Src\Shared\Domain\Entity;

final class CategoryTask extends Entity
{
    public $id;
    public $category;
    public $description;
    public $status;

    public function __construct(
        CategoryTaskId $id,
        CategoryTaskCategory $category,
        CategoryTaskDescription $description,
        CategoryTaskStatus $status
    )
    {
        $this->id = $id;
        $this->category = $category;
        $this->description = $description;
        $this->status = $status;
    }

    public function id(): CategoryTaskId
    {
        return $this->id;
    }

    public function category(): CategoryTaskCategory
    {
        return $this->category;
    }

    public function description(): CategoryTaskDescription
    {
        return $this->description;
    }

    public function status(): CategoryTaskStatus
    {
        return $this->status;
    }
}
