<?php

namespace Envano\Slasher\App;

use Envano\Slasher\App\Contracts\InputParserInterface;
use Envano\Slasher\Exceptions\EmptyTextInputException;

class InputParser implements InputParserInterface {

    /**
     *  ("(?:\\.|[^"\\])*")|([^\s]+)
     *  (?:(?:(?:")+((?:(?:[^\\"]+)(?:(?:(?:\\)*(?!"))?(?:\\")?)*)+)(?:"))+|([^ ]+)+)+(?: )?
     * @inheritdoc
     */
    public static function parse(SlashRequest $request) {

        $text = $request->getText();

        if(empty($text)) {

            throw new EmptyTextInputException('The request text input cannot be empty!');

        }

        $parts = self::match($text);

        $arguments = self::parseArguments($parts);
        $options = self::parseOptions($parts);
        $command = self::parseCommandName($parts);

        $input = new Input($text,$request,$command,$arguments,$options);

        return $input;

    }

    private static function match($text) {

        $regex = '/(?:(?:(?:")+((?:(?:[^\\\\"]+)(?:(?:(?:\\\\)*(?!"))?(?:\\\\")?)*)+)(?:"))+|([^ ]+)+)+(?: )?/';

        preg_match_all($regex, $text, $matches);

        return $matches;


    }

    /**
     *
     * @param $parts array
     * @return string|null
     */
    protected static function parseCommandName($parts) {

        $command = null;

        if(isset($parts[0]) && !empty($parts[0])) {

            $part = $parts[0];
            $command = (isset($part[0]) && !empty($part[0])) ? trim($part[0]) : null;


        }

        return $command;

    }

    /**
     * @param $parts array
     * @return array
     */
    protected static function parseArguments($parts) {

        $arguments = [];

        if(isset($parts[0]) && !empty($parts[0])) {

            // Get the first part
            $part = $parts[0];

            // Remove the first item which is the command.
            unset($part[0]);

            foreach ($part as $argument) {

                $argument = trim($argument);
                // Skip the options
                if(strpos($argument, '--') === 0) {

                    continue;

                }

                // Remove any single or double quotes
                $argument = str_replace(array('\'', '"'), '', $argument);

                // Add the array of arguments
                $arguments[] = $argument;


            }


        }

        return $arguments;

    }

    /**
     *
     * @param $parts array
     * @return array
     */
    protected static function parseOptions($parts) {

        $options = [];

        if(isset($parts[0]) && !empty($parts[0])) {

            // Get the first part
            $part = $parts[0];

            // Remove the first item which is the command.
            unset($part[0]);

            foreach ($part as $argument) {

                $argument = trim($argument);

                // Process each options
                if(strpos($argument, '--') === 0) {

                    // remove the --
                    $argument = substr($argument, 2);

                    if(empty($argument)) {

                        continue;

                    }

                    $opt_parts = explode('=', $argument);

                    $options[$opt_parts[0]] = (isset($opt_parts[1])) ? $opt_parts[1] : null;

                }


            }


        }

        return $options;

    }


}