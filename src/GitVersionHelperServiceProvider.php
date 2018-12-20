<?php

namespace Storms\GitVersionHelper;

use Illuminate\Support\ServiceProvider;

class GitVersionHelperServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton(GitVersionHelper::class, function () {
            return new GitVersionHelper();
        });

        $this->app->alias(GitVersionHelper::class, 'git-version-helper');
    }
}
