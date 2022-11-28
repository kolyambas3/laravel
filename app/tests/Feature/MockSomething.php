<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Mockery;
use Mockery\MockInterface;
use Tests\TestCase;

class MockSomething extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function MockSomething()
    {
        $this->instance(
            Service::class,
            Mockery::mock(Service::class, function(MockInterface $mock) {
                $mock->shouldReceive('process')->once();
            })
        );
    }
}
