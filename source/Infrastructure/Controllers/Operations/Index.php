<?php

namespace Defi\Infrastructure\Controllers\Operations;

trait Index
{
    public function index()
    {
        return $this->repository->findAll();
    }
}
