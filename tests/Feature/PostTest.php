<?php

namespace Tests\Feature;

use App\Models\Post;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PostTest extends TestCase
{
    use RefreshDatabase;

    public function test_create_post_form_view()
    {
        $user = User::factory()->create();

        // Accédez à la route wall avec l'utilisateur authentifié
        $response = $this->actingAs($user)->get(route('wall', ['slug' => $user->slug]));

        $response->assertStatus(200);
        $response->assertSee('content:');
        $response->assertSee('image:');
    }

    public function test_submitting_create_post_form()
    {
        $user = User::factory()->create();

        $postData = [
            'content' => 'This is a test post content.',
            'image' => 'https://via.placeholder.com/150',
        ];

        // Assurez-vous que l'utilisateur est authentifié pour soumettre le formulaire
        $this->actingAs($user);

        $response = $this->post(route('post.store'), $postData);
        $response->assertStatus(302); // Ou 200 selon votre redirection

        $response->assertRedirect(route('wall', ['slug' => $user->slug]));
        $this->assertDatabaseHas('posts', $postData);
    }
}
