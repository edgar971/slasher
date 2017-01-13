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
    protected $command;

    /**
     * @var
     */
    protected $arguments;

    /**
     * @var
     */
    protected $options;



    public function __construct($text, $command,$arguments  = [], $options = []) {

        $this->text = $text;
        $this->command = $command;
        $this->arguments = $arguments;
        $this->options = $options;

    }

    /**
     * @inheritDoc
     */
    public function getText()
    {
        // TODO: Implement getText() method.
    }

    /**
     * @inheritDoc
     */
    public function getArguments()
    {
        // TODO: Implement getArguments() method.
    }

    /**
     * @inheritDoc
     */
    public function getArgument()
    {
        // TODO: Implement getArgument() method.
    }

    /**
     * @inheritDoc
     */
    public function hasArgument()
    {
        // TODO: Implement hasArgument() method.
    }

    /**
     * @inheritDoc
     */
    public function getOptions()
    {
        // TODO: Implement getOptions() method.
    }

    /**
     * @inheritDoc
     */
    public function getOption()
    {
        // TODO: Implement getOption() method.
    }

    /**
     * @inheritDoc
     */
    public function hasOption()
    {
        // TODO: Implement hasOption() method.
    }


}