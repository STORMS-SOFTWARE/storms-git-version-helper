<?php

namespace Storms\GitVersionHelper;

use Illuminate\Support\Facades\Facade;

class GitVersionHelperFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return GitVersionHelper::class;
    }
}
