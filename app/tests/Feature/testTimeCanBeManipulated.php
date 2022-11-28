<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class testTimeCanBeManipulated extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testTimeCanBeManipulated()
    {
        $this->travel(5)->milliseconds();
        $this->travel(5)->seconds();
        $this->travel(5)->minutes();
        $this->travel(5)->hours();
        $this->travel(5)->days();
        $this->travel(5)->weeks();
        $this->travel(5)->years();

        $this->travel(-5)->hours();

        $this->travelTo(now()->subHours(6));

        $this->travelBack();
    }
}
