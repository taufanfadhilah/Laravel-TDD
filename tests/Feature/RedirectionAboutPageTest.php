<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RedirectionAboutPageTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @test
     */
    public function it_will_be_redirect()
    {
        $this->withoutExceptionHandling();
        $this->get('/about-page')->assertRedirect('/about');
    }

    /** @test */
    public function about_page_can_be_rendered()
    {
        $this->get('/about')->assertStatus(200)->assertSee('About Page');
    }
}
