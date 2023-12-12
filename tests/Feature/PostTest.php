<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PostTest extends TestCase
{
    use RefreshDatabase;

    public function test_create_post_form_view()
    {
        $response = $this->get('/wall');

        $response->assertStatus(200);
        $response->assertSee('content:');
        $response->assertSee('image:');
    }

    public function test_submitting_create_post_form()
    {
        $postData = [
            'content' => 'This is a test post content.',
            'image' => 'https://via.placeholder.com/150',
        ];

        $response = $this->post('/posts', $postData);
        $response->assertStatus(200);

        $response->assertRedirect('/posts');
        $this->assertDatabaseHas('posts', $postData);
    }
}