<?php

namespace Defi\Infrastructure\Controllers\Operations;

use Illuminate\Http\Request;

trait Update
{
    public function update(Request $request, int $id): int
    {
        $data = $request->all();
        return $this->repository->update($data, $id);
    }
}
