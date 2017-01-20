<?php

namespace Envano\Slasher\App\Contracts;

use Envano\Slasher\App\Input;
use Envano\Slasher\App\Output;
use Envano\Slasher\App\SlasherCommand;
use Envano\Slasher\App\SlashRequest;
use Illuminate\Http\Request;

interface SlasherInterface {

    /**
     * @return Output
     */
    public function run();

    /**
     * @return array
     */
    public function getCommands();

    /**
     * @param $name
     * @return SlasherCommand
     */
    public function searchCommand($name);

    /**
     *
     * @return SlashRequest
     */
    public function getRequest();


    /**
     * @return Input;
     */
    public function getInput();


}