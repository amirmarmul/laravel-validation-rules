<?php

namespace Kcdev\ValidationRules;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

class ValidationRulesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register()
    {
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/validationRules'),
        ]);

        $this->loadTranslationsFrom(__DIR__.'/../resources/lang/', 'validationRules');

        $this->registerValidationRules();
    }

    /**
     * Register custom validation rule.
     */
    protected function registerValidationRules()
    {
        Validator::extend('basic_password', 'Kcdev\ValidationRules\Rules\BasicPassword@validate', __('validationRules::messages.basic_password'));
        Validator::replacer('basic_password', 'Kcdev\ValidationRules\Rules\BasicPassword@replacer', __('validationRules::messages.basic_password'));

        Validator::extend('current_password', 'Kcdev\ValidationRules\Rules\CurrentPassword@validate', __('validationRules::messages.current_password'));
    }
}
