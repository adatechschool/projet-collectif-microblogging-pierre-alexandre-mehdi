<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HelloWorldTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_hello_world_view()
    {
        $response = $this->get('/helloWorld'); // Assurez-vous que l'URL correspond à votre route

        $response->assertStatus(200)
            ->assertSeeText('Hello World');
    }
}
