<?php

declare(strict_types=1);

namespace Src\Shared\Domain;

abstract class Entity
{
    /**
     * @return array
     */
    public function toArray(): array
    {
        $response = [];
        foreach (get_object_vars($this) as $key => $value) {
            $response = array_merge($response, [
                $key => $value->value()
            ]);
        }
        return $response;
    }
}
