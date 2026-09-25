<?php

use App\Models\Award;
use App\Models\User;
use App\Policies\AwardPolicy;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Gate;

uses(RefreshDatabase::class);

test('guests cannot access award create or edit routes', function () {
    $this->get(route('awards.create'))->assertRedirect(route('admin.login'));
    $this->post(route('awards.store'))->assertRedirect(route('admin.login'));
});

test('non-admin users cannot access award create or update abilities', function () {
    $user = User::factory()->create(['is_admin' => false]);
    $award = Award::create(['name' => 'Existing award']);

    $this->actingAs($user)->get(route('awards.create'))->assertForbidden();
    $this->actingAs($user)->put(route('awards.update', $award))->assertForbidden();

    expect(Gate::forUser($user)->allows('create', Award::class))->toBeFalse()
        ->and(Gate::forUser($user)->allows('update', $award))->toBeFalse();
});

test('admin users can access award create and update abilities', function () {
    $user = User::factory()->create(['is_admin' => true]);
    $award = new Award;

    $this->actingAs($user)->get(route('awards.create'))->assertOk();

    expect(Gate::forUser($user)->allows('create', Award::class))->toBeTrue()
        ->and(Gate::forUser($user)->allows('update', $award))->toBeTrue()
        ->and(app(AwardPolicy::class)->create($user))->toBeTrue();
});
