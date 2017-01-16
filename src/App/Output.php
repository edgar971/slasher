<?php

namespace Envano\Slasher\App;

use Envano\Slasher\App\Contracts\OutputInterface;

class Output implements OutputInterface {

    /**
     * @var
     */
    protected $output;

    public function getOutput() {

        return $this->output;

    }

    public function setOutput($output) {

        $this->output = $output;

    }

    public function hasOutput() {

       // check if the string is empty or null.

    }


}
