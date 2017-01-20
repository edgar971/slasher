<?php

namespace Envano\Slasher\App;

use Envano\Slasher\App\Contracts\InputInterface;

class Input implements InputInterface {


    /**
     * @var
     */
    protected $text;

    /**
     * @var
     */
    protected $command_name;

    /**
     * @var
     */
    protected $arguments;

    /**
     * @var
     */
    protected $options;

    /**
     * @var SlashRequest
     */
    public $request;



    public function __construct($text, SlashRequest $request ,$command_name, $arguments  = [], $options = []) {

        $this->text = $text;
        $this->request = $request;
        $this->command_name = $command_name;
        $this->arguments = $arguments;
        $this->options = $options;

    }

    /**
     * @inheritDoc
     */
    public function getCommandName() {

        return $this->command_name;

    }


    /**
     * @inheritDoc
     */
    public function getText() {

        return $this->text;

    }

    /**
     * @inheritDoc
     */
    public function getArguments() {

        return $this->arguments;

    }

    /**
     * @inheritDoc
     */
    public function hasArguments() {

        return !empty($this->arguments);

    }

    /**
     * @inheritDoc
     */
    public function getOptions() {

       return $this->options;

    }

    /**
     * @inheritDoc
     */
    public function getOption($name) {
        // TODO: Implement getOption() method.
    }

    /**
     * @inheritDoc
     */
    public function hasOption($name) {
        // TODO: Implement hasOption() method.
    }


}