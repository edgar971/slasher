<?php

namespace Envano\Slasher\App;

use Envano\Slasher\App\Contracts\SlashRequestInterface;
use Illuminate\Http\Request;

class SlashRequest implements SlashRequestInterface {

    protected $channel_id;

    protected $channel_name;

    protected $command;

    protected $response_url;

    protected $team_domain;

    protected $team_id;

    protected $text;

    protected $token;

    protected $user_id;

    protected $user_name;

    public $raw_request;


    public function __construct(Request $request) {


        // Save the raw request;
        $this->raw_request = $request;

        $inputs = $request->all();


        // Iterate through the request input and assign if exists.
        foreach ($inputs as $key => $input) {

            if(property_exists($this, $key)) {

                $this->$key = $input;

            }

        }



    }

    /**
     * @inheritDoc
     */
    public function getChannelID() {

        return $this->channel_id;

    }

    /**
     * @inheritDoc
     */
    public function getChannelName() {

        return $this->channel_name;

    }

    /**
     * @inheritDoc
     */
    public function getCommand() {

        return $this->command;


    }

    /**
     * @inheritDoc
     */
    public function getResponseURL() {

        return $this->response_url;

    }

    /**
     * @inheritDoc
     */
    public function getTeamDomain() {

        return $this->team_domain;

    }

    /**
     * @inheritDoc
     */
    public function getTeamID() {

        return $this->team_id;

    }



    /**
     * @inheritDoc
     */
    public function getText() {

        return $this->text;

    }

    /**
     * @inheritDoc
     */
    public function getToken() {

        return $this->token;

    }

    /**
     * @inheritDoc
     */
    public function getUserID() {

        return $this->user_id;

    }

    /**
     * @inheritDoc
     */
    public function getUsername() {

        return $this->user_name;

    }


}