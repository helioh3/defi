<?php

namespace Defi\Infrastructure\Controllers\Operations;

use Defi\Infrastructure\GenericResource;
use Illuminate\Http\Request;

trait Index
{
    public function index(Request $request): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
        $data = $this->repository->findAll($request->per_page ?? 10);
        return GenericResource::collection($data);
    }
}
