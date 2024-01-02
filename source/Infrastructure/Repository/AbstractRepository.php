<?php

namespace Defi\Infrastructure\Repository;

use Defi\Infrastructure\Repository\Operations\FindAll;
use Defi\Infrastructure\Repository\Operations\FindById;
use Defi\Infrastructure\Repository\Operations\Register;
use Defi\Infrastructure\Repository\Operations\Remove;
use Defi\Infrastructure\Repository\Operations\Update;
use Illuminate\Database\Eloquent\Model;

abstract class AbstractRepository implements RepositoryInterface
{
    /**
     * @param Model $model
     */
    public function __construct(
        protected Model $model
    ){
    }

    /**
     * Operations Basic
     */
    use FindAll;
    use FindById;
    use Register;
    use Update;
    use Remove;
}
