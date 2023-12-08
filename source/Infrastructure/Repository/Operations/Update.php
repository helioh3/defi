<?php

namespace App\Infrastructure\Repository\Operations;

trait Update
{
    /**
     * @param array $data
     * @param int $id
     * @return int
     */
    public function update(array $data, int $id): int
    {
        $roleId = $this->model->find($id);

        return $roleId->update($data);
    }
}
