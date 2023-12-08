<?php

namespace App\Infrastructure\Controllers;

use App\Core\Http\Controllers\Controller;
use App\Infrastructure\Controllers\Operations\Create;
use App\Infrastructure\Controllers\Operations\Destroy;
use App\Infrastructure\Controllers\Operations\Index;
use App\Infrastructure\Controllers\Operations\Show;
use App\Infrastructure\Controllers\Operations\Store;
use App\Infrastructure\Controllers\Operations\Update;
use App\Infrastructure\Repository\RepositoryInterface;

class AbstractController extends Controller
{
    /**
     * @param RepositoryInterface $repository
     */
    public function __construct(
        protected RepositoryInterface $repository
    ){
    }

    /**
     * Operations Basic
     */
    use Index;
    use Show;
    use Create;
    use Store;
    use Update;
    use Destroy;
}
