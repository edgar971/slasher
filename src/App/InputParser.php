<?php

namespace Envano\Slasher\App;

use Envano\Slasher\App\Contracts\InputParserInterface;
use Envano\Slasher\Exceptions\EmptyTextInputException;

class InputParser implements InputParserInterface {

    /**
     * @inheritdoc
     */
    public static function parse(SlashRequest $request) {

        $text = $request->getText();

        if(empty($text)) {

            throw new EmptyTextInputException('The request text input cannot be empty!');

        }

        $arguments = self::parseArguments($text);
        $options = self::parseOptions($text);
        $command = self::parseCommandName($text);

        $input = new Input($text,$request,$command,$arguments,$options);

        return $input;

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