<?php

namespace App\Infrastructure\Controllers\Operations;

use App\Http\Admin\Plan\Requests\PlanUpdateRequest;
use Illuminate\Http\Client\Request;

trait Update
{
    public function update(Request $request, int $id): int
    {
        $data = $request->all();
        return $this->repository->update($data, $id);
    }
}
