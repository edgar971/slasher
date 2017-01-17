<?php

namespace Envano\Slasher\App;

use Envano\Slasher\App\Contracts\InputInterface;
use Envano\Slasher\App\Contracts\OutputInterface;
use Illuminate\Http\Request;
use Envano\Slasher\App\Contracts\CommandInterface;


class SlasherCommand implements CommandInterface {

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
     * @var string
     */
    protected $description;


    /**
     * The method called to run the comman
     * @var string
     */
    protected $method = 'handle';


    /**
     * @inheritDoc
     */
    public function getCommandName() {

        return $this->name;

    }

    /**
     * @inheritDoc
     */
    public function getSignature() {

        return $this->signature;

    }

    /**
     * @inheritDoc
     */
    public function getDescription() {

        return $this->description;

    }


    /**
     * @inheritDoc
     */
    public function getInput() {

       return $this->input;

    }

    /**
     * @inheritDoc
     */
    public function getOutput() {

        return $this->outout;

    }

    /**
     * @inheritDoc
     */
    public function execute() {

        $exists =  method_exists($this, $this->method);

        if($exists) {

            return call_user_func_array([$this, $this->method],[]);

        } else {

            return false;

        }

    }

    /**
     * This function will be called when the command is executed
     * @return mixed
     */
    abstract protected function handle();


}

