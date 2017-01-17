<?php

namespace Envano\Slasher\App;

use Envano\Slasher\App\Contracts\CommandInterface;
use Envano\Slasher\Exceptions\EmptyTextInputException;
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
     * @var Request
     */
    protected $request;

    /**
     * @var string
     */
    protected $text;


    /**
     * Slasher constructor.
     *
     * @param Request $request
     */
    public function __construct(Request $request) {

        $this->request = $request;

    }

    /**
     * @inheritDoc
     */
    public function getCommands() {

        return $this->commands;

    }

    protected function bootstrap() {

        // Process commands
        $this->processCommands();

    }

    /**
     *
     */
    private function processCommands() {

        if(empty($this->commands)) {

            return false;

        }

        // Bootstrap and configure each command.
        /**
         * @var CommandInterface $command
         */
        foreach($this->commands as $command) {

            // Create instance

            // Add to array with command name as key

        }

    }

    public function getRequest() {

        return $this->request;

    }

    public function getCommand($name) {


    }


    protected function processRequest(Request $request) {

        $text = $request->input('text');

        if(empty($text)) {

            throw new EmptyTextInputException('The request text input cannot be empty!');

        }

        $args = $this->parseText($text);



    }

    private function parseText($text) {



    }



        /**
     * @inheritdoc
     */
    public function run() {

        // Get Text
        $text = $this->processRequest($this->request);

        // Process input
            // @error out if missing text

        // Find command
            // @error if missing command

        // Execute command

        // Return output


    }






}