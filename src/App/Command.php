<?php

namespace Envano\Slasher\App;

use Envano\Slasher\App\Contracts\InputInterface;
use Envano\Slasher\App\Contracts\OutputInterface;
use Illuminate\Http\Request;
use Envano\Slasher\App\Contracts\CommandInterface;


class Command implements CommandInterface {

    /**
     * @var string
     */
    protected $name;

    /**
     * @var InputInterface
     */
    protected $input;

    /**
     * @var OutputInterface
     */
    protected $outout;

    /**
     * @var string
     */
    protected $signature;


    /**
     * @var Request
     */
    protected $request;

    /**
     * The method called to run the comman
     * @var string
     */
    protected $method = 'handle';


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
    public function execute() {

        $exists =  method_exists($this, $this->method);

        if($exists) {

            return call_user_func_array([$this, $this->method],[]);

        }

    }


}

