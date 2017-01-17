<?php


class ExampleCommand extends \Envano\Slasher\App\SlasherCommand {

    /**
     * @inheritDoc
     */
    protected function handle() {

        $a = 1;
        $b = 2;

        var_dump($a + $b);

    }


}