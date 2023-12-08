<?php

namespace App\Infrastructure\Service;

interface ServiceInterface
{
    /**
     * @return mixed
     */
    public function getAll(): mixed;

    /**
     * @param int $id
     * @return mixed
     */
    public function find(int $id): mixed;

    /**
     * @param array $data
     * @return mixed
     */
    public function register(array $data): mixed;

    /**
     * @param array $data
     * @param int $id
     * @return mixed
     */
    public function update(array $data, int $id): mixed;

    /**
     * @param int $id
     * @return mixed
     */
    public function remove(int $id): mixed;
}
