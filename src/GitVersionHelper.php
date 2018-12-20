<?php

namespace Storms\GitVersionHelper;

use Config;
use Storms\GitVersionHelper\Exception\NoVersionException;

class GitVersionHelper
{
    public static function getVersion()
    {
        $version = self::version();

        if ($version === null) {
            $currentDir = getcwd();

            chdir(base_path());

            shell_exec('git describe --tags > .version');

            chdir($currentDir);

            $version = self::version();

            if ($version === null) {
                throw new NoVersionException();
            }
        }

        return $version;
    }

    public static function getNameAndVersion()
    {
        return Config::get('app.name', 'app') . ' (' . self::getVersion() . ')';
    }

    private static function version()
    {
        $versionFile = base_path() . '.version';

        if (!file_exists($versionFile)) {
            return null;
        }

        return !empty(trim(file_get_contents($versionFile))) ? trim(file_get_contents($versionFile)) : null;
    }
}
