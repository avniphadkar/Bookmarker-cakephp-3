<?php
namespace App;

use Cake\Http\BaseApplication;
use Cake\Error\Middleware\ErrorHandlerMiddleware;
use Cake\Routing\Middleware\AssetMiddleware;
use Cake\Routing\Middleware\RoutingMiddleware;

class Application extends BaseApplication
{
    public function bootstrap()
    {
        require_once $this->configDir . '/bootstrap.php';
    }

    public function middleware($middleware)
    {

        $middleware->push(new ErrorHandlerMiddleware());

        $middleware->push(new AssetMiddleware());

        $middleware->push(new RoutingMiddleware());
        return $middleware;
    }
}
