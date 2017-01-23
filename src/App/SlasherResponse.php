<?php

namespace Envano\Slasher\App;


use Envano\Slasher\App\Contracts\SlasherResponseInterface;
use Illuminate\Support\Collection;

class SlasherResponse implements SlasherResponseInterface {


    /**
     * @var SlashRequest
     */
    protected $slash_request;

    /**
     * @var string
     */
    protected $text;

    /**
     * @var string
     */
    protected $response_type;

    /**
     * @var string
     */
    protected $channel;

    /**
     * @var string
     */
    protected $icon = '';

    /**
     * @var Collection
     */
    protected $attachments;



    /**
     * @inheritDoc
     */
    public function getResponse()
    {
        // TODO: Implement getResponse() method.
    }

    /**
     * @inheritDoc
     */
    public function withText($text)
    {
        // TODO: Implement withText() method.
    }

    /**
     * @inheritDoc
     */
    public function onChannel($channel)
    {
        // TODO: Implement onChannel() method.
    }

    /**
     * @inheritDoc
     */
    public function displayToUserOnly()
    {
        // TODO: Implement displayToUserOnly() method.
    }

    /**
     * @inheritDoc
     */
    public function displayToChannel()
    {
        // TODO: Implement displayToChannel() method.
    }

    /**
     * @inheritDoc
     */
    public function withAttachment()
    {
        // TODO: Implement withAttachment() method.
    }

    /**
     * @inheritDoc
     */
    public function useIcon($string)
    {
        // TODO: Implement useIcon() method.
    }

    /**
     * @inheritDoc
     */
    public function getIconType()
    {
        // TODO: Implement getIconType() method.
    }


}
