<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use View;

class FetcherController extends Controller
{
    private $guzzle;

    public function __construct(Client $guzzle)
    {
        $this->guzzle = $guzzle;
    }

    /**
     * Display a listing of the air traffic details.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $base_uri = 'https://opensky-network.org/api/';

        //set up new client for opensky api
        $this->client  = new Client([
                'base_uri' => $base_uri
            ]);

        // send the request to fetch all states data and get the response
        $response = $this->client->get($base_uri.'states/all?time=1458564121&icao24=3c6444');

        // get air traffic data and json decode
        $result = json_decode($response->getBody(), true);

        return View::make('fetcher.airtraffic', [
                'result' => $result
            ]);
    }

}
