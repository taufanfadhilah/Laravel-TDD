<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class LogoutUserTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @test
     */
    public function user_loggedin_can_be_logout()
    {
        $user = User::factory()->create();
        
        $this->actingAs($user);

        $this->post('logout')
                ->assertSessionHas('message')
                ->assertRedirect(route('login'));
    }
}
