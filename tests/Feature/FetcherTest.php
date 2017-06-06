<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use GuzzleHttp\Client;

class FetcherTest extends TestCase
{

	/**
     * The Guzzle Client instance.
     *
     * @var GuzzleHttp\Client
     */
    private $client;

    /**
     * Test Open Sky Data Display
     * 
     * @return void
     */
    public function testDisplayOpenSkyData()
    {
        $response = $this->call('GET', 'air-traffic');
        $this->assertTrue($response->isOK());
    }

    /**
     * Set up the Guzzle Client instance.
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();

        //set up new client for opensky api
        $this->client  = new Client([
                'base_uri' => 'https://opensky-network.org/api/'
            ]);
    }

    public function tearDown() {
        $this->client = null;
    }
	
    /**
     * Test Open Sky API
     *
     * @return void
     */
    public function testInterceptsCalls()
    {

        //send the request to fetch all states data and get the response
        $response = $this->client->get('https://opensky-network.org/api/states/all');

        $data = json_decode($response->getBody(), true);

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertCount(11, $response->getHeaders());
        
        $this->assertArrayHasKey('time', $data);
        $this->assertArrayHasKey('states', $data);

    }

}
