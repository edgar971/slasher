<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SlasherMiddlewareTest extends TestCase {



    /**
     * Test Slasher Authentication Middleware
     *
     * @return void
     */
    public function testMissingToken() {

        $request = $this->mockRequest();

        $request->replace([]);

        $middleware = new \Envano\Slasher\Middleware\SlasherAuthentication();


        $middleware->handle($request, function($r) use ($after){

            var_dump($r);


        });

    }
}
