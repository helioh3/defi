<?php

namespace App\Infrastructure\Repository;

use App\Infrastructure\Repository\Operations\FindAll;
use App\Infrastructure\Repository\Operations\FindById;
use App\Infrastructure\Repository\Operations\Register;
use App\Infrastructure\Repository\Operations\Remove;
use App\Infrastructure\Repository\Operations\Update;
use Illuminate\Database\Eloquent\Model;

class AbstractRepository implements RepositoryInterface
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
