<?php

namespace CityUGE\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Blade directives
        // Escape XML
        Blade::directive('xmle', function ($expression) {
            return "<?php echo htmlspecialchars({$expression}, ENT_XML1, 'UTF-8'); ?>";
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment() === 'local') {
            $this->app->register('Barryvdh\Debugbar\ServiceProvider');
        }
    }
}
