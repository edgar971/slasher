<?php

namespace Envano\Slasher\App\Contracts;


interface OutputInterface {

    public function getOutput();

    public function setOutput($output);

    public function hasOutput();


}