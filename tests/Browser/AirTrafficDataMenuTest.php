<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class AirTrafficDataMenuTest extends DuskTestCase
{
    /**
     * Test visit
     *
     * @return void
     */
    public function testVisit()
    {
        $this->browse(function ($browser) {
            $browser->visit('http://127.0.0.1:8000/')
                 ->clickLink('Air Traffic Data')
                 ->assertSee('Air Traffic Data');
        });
    }
}
