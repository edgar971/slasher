<?php

namespace Envano\Slasher\App\Contracts;

interface InputParserInterface {

    /**
     * @param $text
     * @return InputInterface
     */
    public static function parse($text);

}