<?php

namespace Envano\Slasher\App\Contracts;

use Illuminate\Http\Request;

/**
 * Data https://docs.mattermost.com/developer/slash-commands.html
 *
 * Interface SlashRequestInterface
 * @package Envano\Slasher\App\Contracts
 */
interface SlashRequestInterface {


    /**
     * Returns the Channel ID
     *
     * @return string
     */
    public function getChannelID();

    /**
     * Returns the Channel Name
     *
     * @return string
     */
    public function getChannelName();

    /**
     * Returns the Command
     *
     * @return string
     */
    public function getCommand();

    /**
     * Returns the Response URL
     *
     * @return string
     */
    public function getResponseURL();

    /**
     * Returns the Team Domain
     *
     * @return string
     */
    public function getTeamDomain();

    /**
     * Returns the Team ID
     *
     * @return string
     */
    public function getTeamID();

    /**
     * Returns the Text sent by the user
     *
     * @return string
     */
    public function getText();

    /**
     * Returns the Token
     *
     * @return string
     */
    public function getToken();

    /**
     * Returns the User ID
     * @return string
     */
    public function getUserID();

    /**
     * Returns the Username
     *
     * @return string
     */
    public function getUsername();

}