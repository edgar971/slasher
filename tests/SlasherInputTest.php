<?php


class SlasherInputTest extends TestCase {


    public function testCommandName() {

        $input = $this->slasher->getInput();
        $command_name = $input->getCommandName();
        $this->assertEquals($this->command_name, $command_name);

    }


    public function testInputOptionsLength() {

        $input = $this->slasher->getInput();
        $options = $input->getOptions();
        $this->assertEquals(3,count($options));

    }

    public function testInputHasArguments() {

        $input = $this->slasher->getInput();
        $has_options = $input->hasArguments();

        $this->assertEquals(true, $has_options);

    }




}