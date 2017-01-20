<?php

namespace Envano\Slasher\App\Contracts;


use Envano\Slasher\App\Output;

interface CommandInterface {

    /**
     * @return string
     */
    public function getCommandName();

    /**
     * @return string
     */
    public function getSignature();

    /**
     * @return string
     */
    public function getDescription();

    /**
     * @return mixed
     */
    public function getInput();

    /**
     * @return Output
     */
    public function getOutput();

    /**
     * @return mixed
     */
    public function execute();


}