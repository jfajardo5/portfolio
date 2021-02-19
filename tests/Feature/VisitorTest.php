<?php

namespace Tests\Feature;

use Tests\TestCase;

class VisitorTest extends TestCase
{

    public function test_site_index_page_can_be_reached()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_contact_form_can_be_submitted()
    {
        $response = $this->post(route('contact'),[
            'name' => 'Test Guy',
            'email' => 'testguy@gmail.com',
            'message' => 'Test message'
        ]);
        
        $response->assertSessionHasNoErrors();
    }

    public function test_contact_form_cannot_be_submitted_without_name_parameter()
    {
        $response = $this->post(route('contact'),[
            'email' => 'testguy@gmail.com',
            'message' => 'Test message'
        ]);
        
        $response->assertSessionHasErrors();
    }

    public function test_contact_form_cannot_be_submitted_without_valid_email()
    {
        $response = $this->post(route('contact'),[
            'name' => 'Test Guy',
            'email' => 'asdas',
            'message' => 'Test message'
        ]);
        
        $response->assertSessionHasErrors();
    }

    public function test_contact_form_cannot_be_submitted_without_email_parameter()
    {
        $response = $this->post(route('contact'),[
            'name' => 'Test Guy',
            'message' => 'Test message'
        ]);
        
        $response->assertSessionHasErrors();
    }

    public function test_contact_form_cannot_be_submitted_without_message_parameter()
    {
        $response = $this->post(route('contact'),[
            'name' => 'Test Guy',
            'email' => 'testguy@gmail.com'
        ]);
        
        $response->assertSessionHasErrors();
    }

    public function test_unauthenticated_users_cannot_access_dashboard()
    {
        $this->get(route('dashboard'));

        $this->assertGuest();
    }

    public function test_unauthenticated_users_cannot_access_dashboard_visitors_page() 
    {
        $this->get(route('visitors'));

        $this->assertGuest();
    }

    public function test_unauthenticated_users_cannot_access_dashboard_forms_page() 
    {
        $this->get(route('forms'));

        $this->assertGuest();
    }

    public function test_unauthenticated_users_cannot_access_dashboard_new_article_page() 
    {
        $this->get(route('new-article'));

        $this->assertGuest();
    }
}
