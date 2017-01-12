<?php

namespace Envano\Slasher\App\Contracts;

interface CommandInterface {

    public function getCommand();

    public function getArguments();

    public function getOriginalText();

    public function getRequest();


}