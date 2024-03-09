<?php

namespace Defi\Infrastructure\Repository\Operations;

use Illuminate\Database\Eloquent\Collection;

trait FindAll
{
    /**
     * @return mixed
     */
    public function findAll(): mixed
    {
        return $this->model->latest()->paginate(11);
    }
}
