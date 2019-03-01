<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        View::creator(['partials.nav','frontend.categoryview.category'],
            'App\Http\ViewComposer\NavComposer');

        View::creator(['admin.master.master',],
            'App\Http\ViewComposer\MasterComposer');

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
