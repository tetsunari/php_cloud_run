<?php declare(strict_types=1);

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

final class RepositoryProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(\App\Service\MyApp\MyAppInterface::class, function () {
            return new \App\Repository\MyApp\MyAppRepository(
                $this->app['db']
            );
        });

        $this->app->bind(\App\Service\Redis\RedisInterface::class, function () {
            return new \App\Repository\Redis\RedisRepository(
                $this->app['redis']
            );
        });
    }

    public function boot()
    {
        //
    }
}
