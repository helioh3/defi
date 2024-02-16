<?php

namespace Defi\Infrastructure\Controllers\Operations;

use Defi\Infrastructure\GenericResource;

trait Index
{
    public function index(): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
        $data = $this->repository->findAll();
        return GenericResource::collection($data);
    }
}
