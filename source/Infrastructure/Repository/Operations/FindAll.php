<?php

namespace Defi\Infrastructure\Repository\Operations;

use Illuminate\Database\Eloquent\Collection;

trait FindAll
{
    /**
     * @return Collection
     */
    public function findAll(): Collection
    {
        return $this->model->latest()->get();
    }
}
