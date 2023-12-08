<?php

namespace App\Infrastructure\Service;

use App\Infrastructure\Repository\RepositoryInterface;

class AbstractService implements ServiceInterface
{


    public function __construct(
        protected RepositoryInterface $repository
    ){
    }

    public function getAll(): mixed
    {
        return $this->repository->list();
    }

    public function find($id): mixed
    {
        return $this->repository->read($id);
    }

    public function register(array $data): mixed
    {
        return $this->repository->register($data);
    }


    public function update(array $data, int $id): int
    {
        return $this->repository->update($data, $id);
    }

    public function remove(int $id): mixed
    {
        return $this->repository->remove($id);
    }
}
