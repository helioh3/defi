<?php

namespace Defi\Infrastructure\Repository\Operations;

trait Remove
{
    /**
     * @param int $id
     * @return mixed
     */
    public function remove(int $id): mixed
    {
        $removeId = $this->model->find($id);
        return $removeId->delete();
    }
}
