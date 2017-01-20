<?php


class SlasherMainTest extends TestCase {


    public function testTotalCommands() {

        $commands = $this->slasher->getCommands();

        $this->assertNotEmpty($commands);

    }

    public function testIsRequest() {

        $request = $this->slasher->getRequest();

        $this->assertInstanceOf(\Envano\Slasher\App\SlashRequest::class, $request);

    }


    public function testGetCommand() {

        $command_name = 'todo:add';
        $command = $this->slasher->searchCommand($command_name);

        $this->assertInstanceOf(\Envano\Slasher\App\Contracts\CommandInterface::class, $command);


    }

    public function testSlasherRun() {

        $output = $this->slasher->run();

        $this->assertInstanceOf(\Envano\Slasher\App\Output::class,$output);


    }

    public function testSlashInput() {

        $input = $this->slasher->getInput();

        $this->assertInstanceOf(\Envano\Slasher\App\Input::class, $input);


    }



}