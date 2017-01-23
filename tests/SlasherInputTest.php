<?php


class SlasherInputTest extends TestCase {


    public function testCommandName() {

        $input = $this->slasher->getInput();
        $command_name = $input->getCommandName();
        $this->assertEquals($this->command_name, $command_name);

    }


    public function testInputHasArguments() {

        $input = $this->slasher->getInput();
        $has_options = $input->hasArguments();

        $this->assertEquals(true, $has_options);

    }


    public function testInputOptionsLength() {

        $input = $this->slasher->getInput();
        $options = $input->getOptions();
        $this->assertEquals(3,count($options));

    }

    public function testInputMissingGetOption() {

        $input = $this->slasher->getInput();
        $option = $input->getOption('test');
        $this->assertEquals(null,$option);


    }

    public function testInputGetOption() {

        $input = $this->slasher->getInput();
        $option = $input->getOption('debug');
        $this->assertEquals('yes',$option);


    }

    public function testInputHasOption() {

        $input = $this->slasher->getInput();
        $has_option = $input->hasOption('notify');
        $this->assertEquals(true, $has_option);

    }






}