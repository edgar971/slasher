<?php

namespace Envano\Slasher\App;

use Envano\Slasher\App\Contracts\InputParserInterface;

class InputParser implements InputParserInterface {

    /**
     * @inheritdoc
     */
    public static function parse($text) {

        if(empty(trim($text,''))) return;

        $arguments = self::parseArguments($text);
        $options = self::parseOptions($text);
        $command = self::parseCommandName($text);

        $input = new Input($text,$command,$arguments,$options);

    }

    /**
     *
     * @param $text
     * @return string|null
     */
    protected static function parseCommandName($text) {

        $command = null;

        return $command;

    }

    /**
     * @param $text string
     * @return array
     */
    protected static function parseArguments($text) {

        $arguments = [];


        return $arguments;

    }

    /**
     * @param $text string
     * @return array
     */
    protected static function parseOptions($text) {

        $options = [];



        return $options;

    }


}