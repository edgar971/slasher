<?php

namespace Envano\Slasher\App\Contracts;


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
     * @return
     */
    public function getRequest();

    /**
     * @return mixed
     */
    public function getInput();

    /**
     * @return mixed
     */
    public function getOutput();

    /**
     * @return mixed
     */
    public function run();


}