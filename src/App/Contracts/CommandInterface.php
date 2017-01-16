<?php

namespace Envano\Slasher\App\Contracts;


use Illuminate\Http\Request;

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
     * @return Request;
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
    public function execute();


}