<?php

namespace Defi\Infrastructure\Controllers\Operations;

use Defi\Infrastructure\GenericResource;

trait Index
{
    public function index(): GenericResource
    {
        $data = $this->repository->findAll();
        return new GenericResource($data);
    }
}
