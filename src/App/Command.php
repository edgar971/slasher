<?php

namespace Envano\Slasher\App;

use App\Http\Requests\Request;
use Envano\Slasher\App\Contracts\CommandInterface;
use Illuminate\Console\Parser;

class Command implements CommandInterface {

    /**
     * @var Request $request
     */
    protected $request;

    /**
     * @var string
     */
    protected $text;

    /**
     * @var string
     */
    protected $command;

    /**
     * @var array
     */
    protected $argument;

    /**
     *
     * @param $text
     */
    protected function parseText($text) {

        list($name, $arguments, $options) = Parser::parse($text);


    }


    public function getCommand()
    {
        // TODO: Implement getCommand() method.
    }

    public function getArguments()
    {
        // TODO: Implement getArguments() method.
    }

    public function getOriginalText()
    {
        // TODO: Implement getOriginalText() method.
    }

    public function getRequest()
    {
        // TODO: Implement getRequest() method.
    }

}

