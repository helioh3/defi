<?php

namespace Defi\Infrastructure\Repository\Operations;

use Illuminate\Database\Eloquent\Collection;

trait FindAll
{
    /**
     * @param int $perPage
     * @return mixed
     */
    public function findAll(int $perPage = 10): mixed
    {
        return $this->model->latest()->paginate($perPage);
    }
}
