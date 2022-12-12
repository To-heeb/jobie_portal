<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AuthTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_user_login_success()
    {

        //$response = $this->get('/user');

        $response = $this->post('/user/login', [
            'email' => 'Toheeb.olawale.to23@gmail.com',
            'password' => 194919,
        ]);
        $response->assertStatus(302);
        $response->assertRedirect('/user/dashboard');

        $dashboard = $this->get('/user/dashboard');

        $dashboard->assertSee(['Interviews Scheduled', 'Application Sent']);
    }

    public function test_employer_login_success()
    {
        $response = $this->post('/employer/login', [
            'email' => 'Toheeb.olawale.to23@gmail.com',
            'password' => 194919,
        ]);
        $response->assertStatus(302);
        $response->assertRedirect('/employer/dashboard');

        $dashboard = $this->get('/employer/dashboard');

        $dashboard->assertSee(['', '']);
    }

    // public function test_admin_login_success()
    // {
    //     $response = $this->post('/admin/login', [
    //         'email' => 'Toheeb.olawale.to23@gmail.com',
    //         'password' => 194919,
    //     ]);
    //     $response->assertStatus(302);
    //     $response->assertRedirect('/admin/dashboard');

    //     $dashboard = $this->get('/admin/dashboard');

    //     $dashboard->assertSee(['', '']);
    // }
}
