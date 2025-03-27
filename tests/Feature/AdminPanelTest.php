<?php

namespace Tests\Feature;

use App\Models\Admin;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class AdminPanelTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_can_login_to_page()
    {
        $admin = Admin::factory()->create();

        $response = $this->post(route('admin.login.post'), [
            'login' => 'account',
            'password' => 'account'
        ]);

        $response->assertRedirect(route('admin.dashboard'));
        $this->assertAuthenticatedAs($admin, 'admin');
    }

    public function test_admin_can_see_all_settings_for_dashboard()
    {
        $admin = Admin::factory()->create();

        Auth::guard('admin')->login($admin);

        $response = $this->get(route('admin.dashboard'));

        $response->assertStatus(200);
        $response->assertViewIs('admin.dashboard');
    }

    public function test_admin_can_logout()
    {
        $admin = Admin::factory()->create();

        Auth::guard('admin')->login($admin);

        $response = $this->post(route('admin.logout'));

        $response->assertRedirect(route('admin.login'));
        $this->assertGuest('admin');
    }

    public function test_admin_can_update_ebook_prices()
    {
        $admin = Admin::factory()->create();

        Auth::guard('admin')->login($admin);

        $data = [
            'prices' => ['PL' => 99.99, 'US' => 49.99]
        ];

        $response = $this->post(route('admin.ebook.update'), $data);

        $response->assertRedirect();
        $this->assertDatabaseHas('ebook_settings', ['country' => 'PL', 'price' => 99.99]);
        $this->assertDatabaseHas('ebook_settings', ['country' => 'US', 'price' => 49.99]);
    }
}
