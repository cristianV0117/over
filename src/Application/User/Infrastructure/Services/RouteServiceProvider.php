<?php
namespace Src\Application\User\Infrastructure\Services;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

final class RouteServiceProvider extends ServiceProvider
{
    protected $namespace = 'Src\Application\User\Infrastructure\Controllers';

    public function boot()
    {
        parent::boot();
    }

    public function map()
    {
        $this->mapRoutes();
    }

    public function mapRoutes()
    {
        $version = $_ENV['APP_VERSION'];
        Route::prefix("api/$version/users")
            ->namespace($this->namespace)
            ->group(base_path('src/Application/User/Infrastructure/Routes/Api.php'));
    }
}