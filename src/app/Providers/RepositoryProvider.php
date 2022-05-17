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
    }

    public function boot()
    {
        //
    }
}
