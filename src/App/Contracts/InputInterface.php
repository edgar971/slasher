<?php

namespace Envano\Slasher\App\Contracts;


interface InputInterface {

    /**
     * @return mixed
     */
    public function getText();

    /**
     * @return mixed
     */
    public function getCommandName();

    /**
     * @return mixed
     */
    public function getArguments();

    /**
     * @return bool
     */
    public function hasArguments();

    /**
     * @return mixed
     */
    public function getOptions();

    /**
     * @return mixed
     */
    public function getOption($name);

    /**
     * @return mixed
     */
    public function hasOption($name);



}