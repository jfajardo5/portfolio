<?php

namespace Tests\Feature;

use App\Providers\RouteServiceProvider;
use Tests\TestCase;

class AuthenticationTest extends TestCase
{

    public function test_login_screen_can_be_rendered()
    {
        $response = $this->get(route('login'));

        $response->assertStatus(200);
    }

    public function test_users_can_authenticate_using_the_login_screen()
    {

        $response = $this->post(route('login'), [
            'email' => config('settings.admin_email'),
            'password' => config('settings.admin_password'),
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect(RouteServiceProvider::HOME);
    }

    public function test_users_cannot_authenticate_with_invalid_password()
    {

        $this->post(route('login'), [
            'email' => config('settings.admin_email'),
            'password' => 'wrong-password',
        ]);

        $this->assertGuest();
    }
}
