<?php

namespace Envano\Slasher\App\Contracts;

interface InputParserInterface {

    /**
     * @param $text
     * @return InputInterface|bool
     */
    public static function parse($text);

}