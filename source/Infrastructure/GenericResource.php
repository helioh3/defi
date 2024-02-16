<?php

namespace Defi\Infrastructure;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Resources\Json\JsonResource;
use JsonSerializable;


class GenericResource extends JsonResource
{
    /**
     * @param $request
     * @return array|Arrayable|JsonSerializable
     */
    public function toArray($request): array|JsonSerializable|Arrayable
    {
        return $this->resource->toArray();
    }
}
