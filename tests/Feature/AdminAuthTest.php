<?php

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('the first visitor can create the one-time admin account', function () {
    $response = $this->post(route('admin.signup.store'), [
        'name' => 'Honoura Admin',
        'email' => 'admin@example.com',
        'password' => 'password123',
        'password_confirmation' => 'password123',
    ]);

    $response->assertRedirect(route('admin.profile'));
    $this->assertAuthenticated();
    expect(User::first()->is_admin)->toBeTrue();

    $this->get(route('admin.signup'))->assertRedirect(route('admin.login'));
});

test('guests cannot access the admin profile', function () {
    $this->get(route('admin.profile'))->assertRedirect(route('admin.login'));
});

test('the admin can log in and update their profile', function () {
    $user = User::factory()->create([
        'name' => 'Original Name',
        'email' => 'admin@example.com',
        'password' => 'password123',
        'is_admin' => true,
    ]);

    $this->post(route('admin.login.store'), [
        'email' => 'admin@example.com',
        'password' => 'password123',
    ])->assertRedirect(route('admin.profile'));

    $this->put(route('admin.profile.update'), [
        'name' => 'Updated Name',
        'email' => 'updated@example.com',
        'password' => '',
        'password_confirmation' => '',
    ])->assertRedirect(route('admin.profile'));

    expect($user->fresh()->name)->toBe('Updated Name')
        ->and($user->fresh()->email)->toBe('updated@example.com');
});
