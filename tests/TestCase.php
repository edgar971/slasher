<?php

use Illuminate\Http\Request;

class TestCase extends \PHPUnit\Framework\TestCase {

    /**
     * @var
     */
    protected $request_data = [

        'input' => [
            "channel_id" => "p7bjhcmi1psdfmnrtytjg3asdf",
            "channel_name" => "town-square",
            "command" => "/example",
            "response_url" => "not supported yet",
            "team_domain" => "development",
            "team_id" => "ebk7htftntyzuck3zxcvrfbkhh",
            "text" => "cms:sync article",
            "token" => "efw13jk3clkjipseskai3sdfzo",
            "user_id" => "1gsssgdm67fymce69q1oponucr",
            "user_name" => "edgarpino"
        ],

        'headers' => []
    ];



    /**
     * @param array $request_data
     * @return \Illuminate\Http\Request
     */
    protected function mockRequest() {

        $request = new \Illuminate\Http\Request();

        $request->replace($this->request_data['input']);

        return $request;

    }

    /**
     * The base URL to use while testing the application.
     *
     * @var string
     */
    protected $baseUrl = 'http://localhost';

    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $app = require __DIR__.'/../tests/bootstrap.php';

        $app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

        return $app;
    }


}