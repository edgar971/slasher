<?php

namespace Envano\Slasher\App\Contracts;

use Envano\Slasher\App\SlashRequest;

interface InputParserInterface {

    /**
     * @param SlashRequest $request
     * @return mixed
     */
    public static function parse(SlashRequest $request);

}