<?php

namespace App\Infrastructure\Controllers\Operations;


use Illuminate\Http\Request;

trait Store
{
    public function store(Request $request)
    {
        return $this->repository->register($request->all());
    }
}
