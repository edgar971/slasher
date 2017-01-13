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
    public function getArguments();

    /**
     * @return mixed
     */
    public function getArgument();

    /**
     * @return mixed
     */
    public function hasArgument();

    /**
     * @return mixed
     */
    public function getOptions();

    /**
     * @return mixed
     */
    public function getOption();

    /**
     * @return mixed
     */
    public function hasOption();



}