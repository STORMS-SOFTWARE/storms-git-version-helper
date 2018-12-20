<?php

namespace Storms\GitVersionHelper\Exception;

use Exception;

class NoVersionException extends Exception
{
    public function __construct()
    {
        parent::__construct("No version found! Please make sure you have a `.version` file in your base directory and `git describe` didn't fail.)");
    }
}
