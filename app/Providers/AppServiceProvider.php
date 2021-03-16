<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Validation;
use Illuminate\Support\Facades\Validator;

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
        Validator::extend('no_special_chars', 'App\Validation\ParameterValidator@validateNoSpecialCharacters');
    }
}
