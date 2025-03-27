<?php

use App\Models\Admin;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class AdminViewTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_can_view_login_page()
    {
        $response = $this->get(route('admin.login'));
        $response->assertStatus(200);
        $response->assertViewIs('admin.login');
    }

    public function test_admin_can_view_dashboard_page()
    {
        $admin = Admin::factory()->create();
        Auth::guard('admin')->login($admin);

        $response = $this->get(route('admin.dashboard'));
        $response->assertStatus(200);
        $response->assertViewIs('admin.dashboard');
    }

    public function test_admin_can_view_client_page()
    {
        $admin = Admin::factory()->create();
        Auth::guard('admin')->login($admin);

        $response = $this->get(route('admin.client'));
        $response->assertStatus(200);
        $response->assertViewIs('admin.client');
    }

    public function test_admin_can_view_ebook_page()
    {
        $admin = Admin::factory()->create();
        Auth::guard('admin')->login($admin);

        $response = $this->get(route('admin.ebook'));
        $response->assertStatus(200);
        $response->assertViewIs('admin.ebook');
    }

    public function test_admin_can_view_setting_page()
    {
        $admin = Admin::factory()->create();
        Auth::guard('admin')->login($admin);

        $response = $this->get(route('admin.setting'));
        $response->assertStatus(200);
        $response->assertViewIs('admin.setting');
    }
}
