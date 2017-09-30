<?php

namespace CityUGE\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;
use ReCaptcha\ReCaptcha;

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

        // reCAPTCHA validation rule
        Validator::extend('recaptcha', function ($attribute, $value, $parameters, $validator) {
            $ip = app('request')->getClientIp();
            $serverName = app('request')->server('SERVER_NAME');
            $recaptcha = new ReCaptcha(env('RECAPTCHA_SECRET_KEY'));
            $response = $recaptcha->verify($value, $ip);
            return $response->isSuccess() && $response->getHostname() === $serverName;
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
