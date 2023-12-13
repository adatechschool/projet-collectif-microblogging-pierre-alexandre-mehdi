<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class WallTest extends TestCase
{
    use RefreshDatabase;

    public function test_wall_page_is_displayed(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get("/wall/{$user->slug}");

        $response->assertStatus(200);
    }

    public function test_post_form_is_displayed_only_if_authenticated_user_wall_is_displayed(): void
    {
        // Créer deux utilisateurs
        $user1 = User::factory()->create();
        $user2 = User::factory()->create();

        // Authentifier l'utilisateur 1
        $this->actingAs($user1);

        // Obtenir la réponse pour le mur de l'utilisateur 1 en tant qu'utilisateur 1
        $response = $this->get("/wall/{$user1->slug}");
        $response->assertSee('Create Post');

        // Obtenir la réponse pour le mur de l'utilisateur 2 en tant qu'utilisateur 1
        $response = $this->get("/wall/{$user2->slug}");
        $response->assertDontSee('Create Post');
    }
}
