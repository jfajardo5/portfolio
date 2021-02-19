<?php

namespace Tests\Feature;

use App\Models\User;
use Tests\TestCase;

class ArticleTest extends TestCase
{

    public function test_unauthenticated_user_cannot_create_new_article()
    {
        $response = $this->post(route('new-article'), [
            'title' => 'Unauthenticated Title',
            'slug' => 'unauthenticated-kebab',
            'body' => '<p>Unauthenticated Article Body</p>'
        ]);

        $response->assertRedirect(route('login'));
    }

    public function test_authenticated_user_can_create_new_article()
    {
        $user = User::get()->first();
        $response = $this->actingAs($user)->post(route('new-article'), [
            'title' => 'Test Title',
            'slug' => 'test-kebab',
            'body' => '<p>Test Article Body</p>'
        ]);

        $response->assertSessionHasNoErrors();
    }

    public function test_authenticated_user_cannot_create_new_article_without_a_title()
    {
        $user = User::get()->first();
        $response = $this->actingAs($user)->post(route('new-article'), [
            'slug' => 'test-kebab',
            'body' => '<p>Test Article Body</p>'
        ]);

        $response->assertSessionHasErrors();
    }

    public function test_authenticated_user_cannot_create_new_article_without_a_slug()
    {
        $user = User::get()->first();
        $response = $this->actingAs($user)->post(route('new-article'), [
            'title' => 'Test Title',
            'body' => '<p>Test Article Body</p>'
        ]);

        $response->assertSessionHasErrors();
    }

    public function test_authenticated_user_cannot_create_new_article_without_a_body()
    {
        $user = User::get()->first();
        $response = $this->actingAs($user)->post(route('new-article'), [
            'title' => 'Test Title',
            'slug' => 'test-kebab',
        ]);

        $response->assertSessionHasErrors();
    }
}
