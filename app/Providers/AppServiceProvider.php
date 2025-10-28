<?php

namespace App\Providers;

use Filament\Support\Colors\Color;
use Illuminate\Support\Facades\URL;
use App\Support\Colors\ClockworkColor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;
use Filament\Support\Facades\FilamentColor;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Model::unguard();

        if (app()->environment('production')) {
            URL::forceScheme('https');
        }

        FilamentColor::register([
            'gray' => ClockworkColor::Navy,
            'info' => Color::Blue,
            'primary' => ClockworkColor::Teal,
            'success' => Color::Emerald,
            'warning' => Color::Orange,
        ]);
    }
}
