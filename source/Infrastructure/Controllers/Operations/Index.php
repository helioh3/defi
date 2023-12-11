<?php

namespace Defi\Infrastructure\Controllers\Operations;

use Illuminate\Http\Resources\Json\AnonymousResourceCollection;


trait Index
{
    public function index(): AnonymousResourceCollection
    {
        return $this->repository->findAll();
    }
}
