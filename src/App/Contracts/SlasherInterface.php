<?php

namespace Envano\Slasher\App\Contracts;

use Illuminate\Http\Request;

interface SlasherInterface {

    /**
     * @return mixed
     * @return CommandInterface
     */
    public function handle(Request $request);



}