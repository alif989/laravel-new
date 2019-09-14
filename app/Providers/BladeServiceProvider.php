<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class BladeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(){
        Blade::if('check',function($data){
            return self::ischeck($data);

        });

    }
    public function ischeck($data){
        if(isset($data) && !empty($data)) return true;
        else return false;

    }
}