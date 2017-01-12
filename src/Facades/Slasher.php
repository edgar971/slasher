<?php

namespace Envano\Slasher\Facades;


use Illuminate\Support\Facades\Facade;

class Slasher extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'slasher'; }

}