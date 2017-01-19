<?php

namespace Envano\Slasher\App\Contracts;

use Illuminate\Http\Request;

interface SlasherInterface {

    /**
     * @return mixed
     */
    public function run();

    /**
     * @return mixed
     */
    public function getCommands();

    /**
     * @param $name
     * @return mixed
     */
    public function searchCommand($name);

    /**
     *
     * @return Request
     */
    public function getRequest();





}