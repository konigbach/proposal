<?php

namespace App\Providers;

use App\ValueObjects\Undefined;
use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        Request::macro('undefinedString', fn (string $key): string|Undefined => request()->has($key) ? request()->string($key)->value() : new Undefined);

        Request::macro('undefinedInteger', fn (string $key): int|Undefined => request()->has($key) ? request()->integer($key) : new Undefined);

        Request::macro('undefinedFloat', fn (string $key): float|Undefined => request()->has($key) ? request()->float($key) : new Undefined);

        Request::macro('undefinedBoolean', fn (string $key): bool|Undefined => request()->has($key) ? request()->boolean($key) : new Undefined);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
