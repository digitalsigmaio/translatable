<?php
/**
 * Created by PhpStorm.
 * User: Manson
 * Date: 11/29/2018
 * Time: 3:37 PM
 */

namespace Digitalsigma\Translatable;


use Illuminate\Support\ServiceProvider;

class TranslatableServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // $this->publishes([
        //     __DIR__.'\config\translatable.php' => config_path('translatable.php'),
        // ]);
    }

    public function register()
    {
        // $this->mergeConfigFrom(__DIR__ . '\config\translatable.php', 'translatable');
    }
}