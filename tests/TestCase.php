<?php


class TestCase extends \PHPUnit\Framework\TestCase {


    /**
     * @var \Envano\Slasher\App\Contracts\SlasherInterface;
     */
    protected $slasher;

    /**
     * @var Request
     */
    protected $request;

    /**
     * @var
     */
    protected $request_data = [

        'input' => [
            "channel_id" => "p7bjhcmi1psdfmnrtytjg3asdf",
            "channel_name" => "town-square",
            "command" => "/todo",
            "response_url" => "not supported yet",
            "team_domain" => "development",
            "team_id" => "ebk7htftntyzuck3zxcvrfbkhh",
            "text" => "todo:add example",
            "token" => "efw13jk3clkjipseskai3sdfzo",
            "user_id" => "1gsssgdm67fymce69q1oponucr",
            "user_name" => "edgarpino"
        ],

        'headers' => []
    ];

    public function __construct() {

        $slasher = $this->createSlasherInstance();

        $slasher->run();

    }

    /**
     * Create mock request
     *
     * @return \Illuminate\Http\Request
     */
    protected function createMockRequest() {

        if(empty($this->request)) {

            $this->request = new \Illuminate\Http\Request();

            $this->request->replace(
                $this->request_data['input']
            );

        }

        return $this->request;

    }

    /**
     * Create Slasher Instance
     *
     * @return ExampleSlasher
     */
    protected function createSlasherInstance() {


        $request = $this->createMockRequest();

        if(empty($this->slasher)) {

            $this->slasher = new ExampleSlasher($request);

        }

        return $this->slasher;

    }




}