<?php

namespace Tests\Feature;

use App\Models\Post;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class NewsTest extends TestCase
{
    use RefreshDatabase;

    public function test_news_page_is_displayed(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get("/news");

        $response->assertStatus(200);
    }

    public function test_all_users_posts_are_displayed(): void
    {
        // Créer deux utilisateurs
        $user1 = User::factory()->create();
        $user2 = User::factory()->create();

        // Créer des posts pour chaque utilisateur
        $user1Posts = Post::factory()->count(3)->create(['user_id' => $user1->id]);
        $user2Posts = Post::factory()->count(3)->create(['user_id' => $user2->id]);

        // Obtenir la réponse pour la page news
        $response = $this->get('/news');

        // Vérifier que les posts de l'utilisateur 1 sont affichés
        foreach ($user1Posts as $post) {
            $response->assertSee($post->content);
        }

        // Vérifier que les posts de l'utilisateur 2 sont affichés
        foreach ($user2Posts as $post) {
            $response->assertSee($post->content);
        }
    }
}
