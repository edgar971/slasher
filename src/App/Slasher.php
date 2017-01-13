<?php

namespace Envano\Slasher\App;

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
     * @var Request
     */
    protected $request;

    /**
     * @var string
     */
    protected $text;


    /**
     * @inheritDoc
     */
    public function getCommands() {

        return $this->commands;

    }

    /**
     *
     */
    protected function processCommands() {

        // Bootstrap and configure each command.
        foreach($this->commands as $command) {



        }

    }

    protected function findCommand($name) {



    }


    protected function processRequest(Request $request) {




    }

    protected function parseText($text) {


    }



        /**
     * @inheritdoc
     */
    public function run() {

        $this->processCommands();

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