<?php

namespace Envano\Slasher\App\Contracts;


interface SlasherResponseInterface {


    /**
     *
     * @return array
     */
    public function getResponse();

    /**
     * @param string $text
     * @return SlasherResponseInterface
     */
    public function withText($text);

    /**
     * @param string $channel
     * @return SlasherResponseInterface
     */
    public function onChannel($channel);


    /**
     * @return SlasherResponseInterface
     */
    public function displayToUserOnly();

    /**
     * @param string $channel
     * @return SlasherResponseInterface
     */
    public function displayToChannel($channel);

    /**
     * @return SlasherResponseInterface
     */
    public function withAttachment();

    /**
     * @param string $string
     * @return SlasherResponseInterface
     */
    public function useIcon($string);

    /**
     * @return string
     */
    public function getIconType();





}