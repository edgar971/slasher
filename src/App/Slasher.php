<?php

namespace Envano\Slasher\App;

use Envano\Slasher\App\Contracts\CommandInterface;
use Envano\Slasher\App\Contracts\InputInterface;
use Envano\Slasher\App\Contracts\SlashRequestInterface;
use Envano\Slasher\Exceptions\EmptyTextInputException;
use Envano\Slasher\Exceptions\SlasherException;
use Envano\Slasher\Exceptions\UndefinedCommandException;
use Illuminate\Http\Request;
use Envano\Slasher\App\Contracts\SlasherInterface;

class Slasher implements SlasherInterface {

    /**
     * The Slack/Mattermost commands provided by the application.
     *
     * @var array
     */
    protected $commands = [];

    /**
     * @var array
     */
    protected $bootstrap_commands = [];


    /**
     * @var SlashRequest
     */
    protected $request;

    /**
     * @var string
     */
    protected $text;

    /**
     * @var Input
     */
    protected $input;


    /**
     * Slasher constructor.
     *
     * @param Request $request
     */
    public function __construct(Request $request) {

        $this->request = new SlashRequest($request);

        // Process Request
        $this->input = $this->processRequest($this->request);

        // Bootstrap stuff
        $this->processCommands($this->input);


    }

    /**
     * @inheritDoc
     */
    public function getCommands() {

        return $this->commands;

    }

    /**
     *
     */
    private function processCommands(InputInterface $input) {

        if(empty($this->commands)) {

            return false;

        }

        // Bootstrap and configure each command.
        /**
         * @var CommandInterface $command
         */
        foreach($this->commands as $class) {

            // Create instance
            $command = new $class($input);

            // Add to array with command name as key
            $this->bootstrap_commands[$command->getCommandName()] = $command;

        }

    }

    public function getRequest() {

        return $this->request;

    }

    /**
     * @inheritDoc
     */
    public function getInput() {

        return $this->input;

    }


    /**
     * @param $name
     * @return CommandInterface
     * @throws SlasherException
     * @throws UndefinedCommandException
     */
    public function searchCommand($name) {

        if(empty($name)) {

            throw new SlasherException("Command name cannot be empty!");

        }

        if(array_key_exists($name, $this->bootstrap_commands)) {

            $command = $this->bootstrap_commands[$name];

        } else {

            throw new UndefinedCommandException("$name Slash command is not defined!");

        }

        return $command;

    }


    protected function processRequest(SlashRequest $request) {

        return InputParser::parse($request);

    }

    /**
     * @inheritdoc
     */
    public function run() {

        // Find command
        $command_name = $this->input->getCommandName();
        $command = $this->searchCommand($command_name);

        // Execute command
        $command->execute();

        // Return output
        return $command->getOutput();

    }






}