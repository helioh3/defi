<?php

namespace App\Infrastructure\Controllers\Operations;

use App\Http\Admin\Plan\Resources\PlanResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use App\Domains\Admin\Plan\PlanService;


trait Index
{
    public function index(): AnonymousResourceCollection
    {
        return $this->repository->findAll();
    }
}
