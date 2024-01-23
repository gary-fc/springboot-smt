<?php

namespace App\Providers;

use App\Domain\repositories\DispatchRepository;
use App\Models\repositories\dispatch\DispatchRepositoryImpl;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any Application services.
     */
    public function register(): void
    {
        $this->app->bind(DispatchRepository::class, function () {
            return new DispatchRepositoryImpl();
        });
    }

    /**
     * Bootstrap any Application services.
     */
    public function boot(): void
    {

    }
}
