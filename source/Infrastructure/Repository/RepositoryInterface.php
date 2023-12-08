<?php

namespace App\Infrastructure\Repository;

interface RepositoryInterface
{
    public function findAll(): mixed;

    public function findById(int $id): mixed;

    public function register(array $data): mixed;

    public function update(array $data, int $id): int;

    public function remove(int $id): mixed;
}
