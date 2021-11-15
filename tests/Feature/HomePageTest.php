<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class HomePageTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @test
     */
    public function home_screen_can_be_rendered_if_user_authenticated()
    {
        $user = User::factory()->create();
        
        $this->actingAs($user);
        
        $response = $this->get('/home');

        $response->assertStatus(200);
    }

    /** @test */
    public function redirect_if_user_not_authenticated()
    {
        $this->get('/home')->assertRedirect(route('login'));
    }
}
