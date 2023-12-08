<?php

namespace App\Infrastructure\Repository\Operations;

trait Register
{
    /**
     * @param array $data
     * @return mixed
     */
    public function register(array $data): mixed
    {
        return $this->model->create($data);
    }
}
