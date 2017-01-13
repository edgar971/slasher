<?php

namespace Envano\Slasher\App;

use Illuminate\Http\Request;
use Envano\Slasher\App\Contracts\CommandInterface;


class Command implements CommandInterface {

    /**
     * @var string
     */
    protected $name;

    /**
     * @var
     */
    protected $input;

    /**
     * @var
     */
    protected $outout;

    /**
     * @var
     */
    protected $signature;

    /**
     * @var
     */
    protected $definition;

    /**
     * @var
     */
    protected $request;


    /**
     * @inheritDoc
     */
    public function getCommandName()
    {
        // TODO: Implement getCommand() method.
    }

    /**
     * @inheritDoc
     */
    public function getSignature()
    {
        // TODO: Implement getDefinition() method.
    }

    /**
     * @inheritDoc
     */
    public function getDescription()
    {
        // TODO: Implement getDescription() method.
    }

    /**
     * @inheritDoc
     */
    public function getRequest()
    {
        // TODO: Implement getRequest() method.
    }

    /**
     * @inheritDoc
     */
    public function getInput()
    {
        // TODO: Implement getInput() method.
    }

    /**
     * @inheritDoc
     */
    public function getOutput()
    {
        // TODO: Implement getOutput() method.
    }

    /**
     * @inheritDoc
     */
    public function run() {
        // TODO: Implement run() method.
    }


}

