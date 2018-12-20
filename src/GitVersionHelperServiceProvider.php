<?php

namespace Storms\GitVersionHelper;

use Illuminate\Support\ServiceProvider;

class GitVersionHelperServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(GitVersionHelper::class, function () {
            return new GitVersionHelper();
        });
    }

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
