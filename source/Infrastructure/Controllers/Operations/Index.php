<?php

namespace App\Infrastructure\Controllers\Operations;

use App\Domains\Admin\Plan\PlanService;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;


trait Index
{
    public function index(): AnonymousResourceCollection
    {
        return $this->repository->findAll();
    }
}
