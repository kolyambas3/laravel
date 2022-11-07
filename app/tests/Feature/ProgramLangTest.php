<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProgramLangTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_command()
    {
        $this->artisan('quest:lang')
            ->expectsQuestion('Which language do you prefer?', 'PHP')
            ->expectsOutput('You prefer PHP')
            ->assertExitCode(0);
    }
}
