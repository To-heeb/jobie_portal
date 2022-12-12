<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

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

        $dashboard->assertSeeTextInOrder(['Interviews Scheduled', 'Application Sent']);
    }

    public function test_user_can_apply_for_a_job()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_user_can_not_apply_for_a_job_twice()
    {
    }
}
