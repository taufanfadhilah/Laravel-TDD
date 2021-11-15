<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomePageTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @test
     */
    public function home_screen_can_be_rendered()
    {
        $response = $this->get('/home');

        $response->assertStatus(200);
    }
}
