Laravel git version helper
========================================

Helper class to get the current git version/tag of the application.

Expects either a `version` file to exist in the `base_path()` of the application
containing a version string, or the `git` binary to be available.

Framework version
-----------------

This package is tested with Laravel 5.

Installation
------------

Require it in your Laravel application:

    composer require storms/git-version-helper

Use
---

Get the git version (string) with:

    \Storms\GitVersionHelper\GitVersionHelper::getVersion()

Get your app name and version with:

    \Storms\GitVersionHelper\GitVersionHelper::getNameAndVersion()

The app's name is taken from `Config::get('app.name', 'app')`, so you can
configure it in your `config/app.php` file or leave it as the default of `app`.

### Recommended usage 

Ensure your git tags are pushed to your servers
so that the versions are described properly.

Add `.version` to your `.gitignore` file
so your working dir stays clean and you don't accidentally commit it.

Ad the following to the scripts section in your `composer.json`:

    "scripts": {
            ...
            
            "post-update-cmd": [
                "@php -r \"file_exists('.version') && unlink('.version');\""
            ]
        }
        
This deletes the `.version` file every time you run `composer update`. 