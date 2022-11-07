<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TestTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_console_command()
    {
        $this->artisan('command:test')
            ->expectsQuestion('What is your name?', 'Andrew')
            ->expectsOutput('Your name is Andrew')
            ->assertExitCode(0);
    }
}
