<?php

namespace Defi\Infrastructure\Controllers;

use App\Core\Http\Controllers\Controller;
use Defi\Infrastructure\Controllers\Operations\Create;
use Defi\Infrastructure\Controllers\Operations\Destroy;
use Defi\Infrastructure\Controllers\Operations\Index;
use Defi\Infrastructure\Controllers\Operations\Show;
use Defi\Infrastructure\Controllers\Operations\Store;
use Defi\Infrastructure\Controllers\Operations\Update;
use Defi\Infrastructure\Repository\RepositoryInterface;

abstract class AbstractController extends Controller
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
