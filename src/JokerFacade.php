<?php

namespace Reddatasrd\Joker;

use illuminate\Support\Facades\Facade;

class JokerFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return "Joker";
    }
}