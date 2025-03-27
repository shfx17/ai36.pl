<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Support\Facades\Session;

class LanguageChangeTest extends TestCase
{
    use RefreshDatabase;

    public function test_change_on_polish_language_on_page()
    {
        Session::start();
        $response = $this->get(route('lang.switch', ['lang' => 'pl']));

        $this->assertEquals(1, Session::get('status'));
        $this->assertEquals('pl', Session::get('locale'));

        $response->assertRedirect();
    }

    public function test_change_on_english_language_on_page()
    {
        Session::start();
        $response = $this->get(route('lang.switch', ['lang' => 'en']));

        $this->assertEquals(1, Session::get('status'));
        $this->assertEquals('en', Session::get('locale'));

        $response->assertRedirect();
    }
}
