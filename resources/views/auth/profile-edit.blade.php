@extends('layouts.auth')

@section('title', 'Update Profile')

@section('content')
    <section class="mx-auto max-w-2xl px-6 py-16 lg:px-10">
        <a href="{{ route('admin.profile') }}" class="text-sm font-bold text-(--crimson) hover:underline">&lt;- Back to profile</a>
        <p class="mt-12 font-mono text-xs font-semibold tracking-[0.25em] text-(--gold-dark) uppercase">Account settings</p>
        <h1 class="mt-3 font-display text-4xl font-bold text-(--purple-950)">Update your profile</h1>

        <form method="POST" action="{{ route('admin.profile.update') }}" class="mt-10 rounded-2xl border border-(--line) bg-(--white) p-6 shadow-(--shadow-soft) sm:p-8">
            @csrf
            @method('PUT')
            <div>
                <label for="name" class="text-sm font-bold text-(--purple-950)">Full name</label>
                <input id="name" name="name" type="text" value="{{ old('name', $user->name) }}" autocomplete="name" required class="mt-2 w-full rounded-xl border border-(--line-dark) bg-(--warm-white) px-4 py-3 text-sm outline-none transition focus:border-(--crimson)">
                @error('name')<p class="mt-1 text-xs text-(--crimson)">{{ $message }}</p>@enderror
            </div>
            <div class="mt-5">
                <label for="email" class="text-sm font-bold text-(--purple-950)">Email address</label>
                <input id="email" name="email" type="email" value="{{ old('email', $user->email) }}" autocomplete="email" required class="mt-2 w-full rounded-xl border border-(--line-dark) bg-(--warm-white) px-4 py-3 text-sm outline-none transition focus:border-(--crimson)">
                @error('email')<p class="mt-1 text-xs text-(--crimson)">{{ $message }}</p>@enderror
            </div>
            <div class="mt-8 border-t border-(--line) pt-8">
                <p class="font-display text-xl font-bold text-(--purple-950)">Change password</p>
                <p class="mt-1 text-sm text-(--ink-soft)">Leave both fields blank to keep your current password.</p>
                <label for="password" class="mt-5 block text-sm font-bold text-(--purple-950)">New password</label>
                <input id="password" name="password" type="password" autocomplete="new-password" class="mt-2 w-full rounded-xl border border-(--line-dark) bg-(--warm-white) px-4 py-3 text-sm outline-none transition focus:border-(--crimson)">
                @error('password')<p class="mt-1 text-xs text-(--crimson)">{{ $message }}</p>@enderror
                <label for="password_confirmation" class="mt-5 block text-sm font-bold text-(--purple-950)">Confirm new password</label>
                <input id="password_confirmation" name="password_confirmation" type="password" autocomplete="new-password" class="mt-2 w-full rounded-xl border border-(--line-dark) bg-(--warm-white) px-4 py-3 text-sm outline-none transition focus:border-(--crimson)">
            </div>
            <div class="mt-8 flex flex-wrap items-center gap-4">
                <button type="submit" class="rounded-full bg-(--purple-950) px-6 py-3 text-sm font-bold text-white transition hover:bg-(--crimson)">Save changes</button>
                <a href="{{ route('admin.profile') }}" class="text-sm font-bold text-(--ink-soft) hover:text-(--crimson)">Cancel</a>
            </div>
        </form>
    </section>
@endsection