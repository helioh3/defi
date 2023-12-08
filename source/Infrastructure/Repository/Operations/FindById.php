<?php

namespace App\Infrastructure\Repository\Operations;

trait FindById
{
    /**
     * @param int $id
     * @return mixed
     */
    public function findById(int $id): mixed
    {
        return $this->model->findOrFail($id);
    }
}
