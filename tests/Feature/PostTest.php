<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PostTest extends TestCase
{
    use RefreshDatabase;

    public function test_create_post_form_view()
    {
        $response = $this->get('/news/create');

        $response->assertStatus(200);
        $response->assertSee('content:');
        $response->assertSee('image:');
    }

    public function test_submitting_create_post_form()
    {
        $postData = [
            'title' => 'Test Post',
            'content' => 'This is a test post content.',
            'image' => 'https://via.placeholder.com/150',
        ];

        $response = $this->post('/wall/store', $postData);

        $response->assertRedirect('/wall/create');
        $this->assertDatabaseHas('posts', $postData);
    }
}