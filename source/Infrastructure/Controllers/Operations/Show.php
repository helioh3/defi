<?php

namespace App\Infrastructure\Controllers\Operations;

trait Show
{
    public function show(int $id)
    {
        return $this->repository->find($id);
    }

}
