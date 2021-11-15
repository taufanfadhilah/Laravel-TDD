<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Providers\RouteServiceProvider;
use App\Models\User;

class RegistrationTest extends TestCase
{
    use RefreshDatabase; 
    /**
     * A basic feature test example.
     *
     * @test
     */
    public function registration_page_can_be_rendered()
    {
        $this->withoutExceptionHandling();
        $response = $this->get('/register');

        $response->assertStatus(200);
    }

    /** @test */
    public function anyone_can_register()
    {
        $user = User::factory()->make();

        $response = $this->post('register', $user->toArray());

        $this->assertAuthenticated();

        $response->assertRedirect(RouteServiceProvider::HOME);
    }
}
