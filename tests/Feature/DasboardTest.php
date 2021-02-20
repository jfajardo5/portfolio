<?php

namespace Tests\Feature;

use App\Models\User;
use Tests\TestCase;

class DasboardTest extends TestCase
{

    public function test_dashboard_can_be_accessed_by_authenticated_user()
    {
        $user = User::get()->first();
        $response = $this->actingAs($user)->get(route('dashboard'));
        
        $response->assertStatus(200);
    }

    public function test_dashboard_visitors_page_can_be_accessed_by_authenticated_user()
    {
        $user = User::get()->first();
        $response = $this->actingAs($user)->get(route('visitors'));
        
        $response->assertStatus(200);
    }

    public function test_dashboard_forms_page_can_be_accessed_by_authenticated_user()
    {
        $user = User::get()->first();
        $response = $this->actingAs($user)->get(route('forms'));
        
        $response->assertStatus(200);
    }

}
