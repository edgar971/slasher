<?php

namespace Envano\Slasher\App;


use Envano\Slasher\App\Contracts\SlasherResponseInterface;
use Illuminate\Support\Collection;

class SlasherResponse implements SlasherResponseInterface {


    const SLASHER_RESPONSE_TO_USER = 'ephemeral';
    const SLASHER_RESPONSE_TO_CHANNEL = 'in_channel';

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
    public function getResponse() {


        if(is_null($this->response_type)) {

            $this->displayToUserOnly();

        }

        $response_data = [
            'text' => $this->text,
            'channel' => $this->channel,
            'link_names' => true,
            'unfurl_links' => true,
            'unfurl_media' => true,
            'mrkdwn' => true,
            'response_type' => $this->response_type
        ];


        if (! empty($this->icon)) {
            $response_data[$this->getIconType()] = $this->icon;
        }

        return $response_data;

    }

    /**
     * @inheritDoc
     */
    public function withText($text) {

       $this->text = $text;

       return $this;

    }

    /**
     * @inheritDoc
     */
    public function onChannel($channel) {

        $this->channel = $channel;

        return $this;

    }

    /**
     * @inheritDoc
     */
    public function displayToUserOnly() {

        $this->response_type = self::SLASHER_RESPONSE_TO_USER;

        return $this;

    }

    /**
     * @inheritDoc
     */
    public function displayToChannel($channel) {

        $this->response_type = self::SLASHER_RESPONSE_TO_CHANNEL;

        if(!empty($channel)) {

            $this->onChannel($channel);

        }

        return $this;

    }

    /**
     * @inheritDoc
     */
    public function withAttachment() {

        // TODO: Implement withAttachment() method.

    }

    /**
     * @inheritDoc
     */
    public function useIcon($icon) {

        $this->icon = $icon;

        return $this;

    }

    /**
     * @inheritDoc
     */
    public function getIconType() {

        if (empty($this->icon)) {
            return '';
        }
        if (starts_with($this->icon, ':') && ends_with($this->icon, ':')) {
            return 'icon_emoji';
        }
        return 'icon_url';

    }


}
