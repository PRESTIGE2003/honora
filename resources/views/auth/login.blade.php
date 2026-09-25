@extends('layouts.auth')

@section('title', 'Admin Login')

@section('content')
    <section class="mx-auto max-w-xl px-6 py-16 lg:px-10">
        <div class="mb-10 text-center">
            <p class="font-mono text-xs font-semibold tracking-[0.25em] text-(--gold-dark) uppercase">Admin access</p>
            <h1 class="mt-3 font-display text-4xl font-bold text-(--purple-950)">Welcome back</h1>
            <p class="mt-4 text-sm leading-6 text-(--ink-soft)">Sign in to manage your Honoura profile and catalogue.</p>
        </div>

        @if (session('status'))
            <div class="mb-6 border-l-4 border-(--gold) bg-(--white) px-5 py-4 text-sm shadow-(--shadow-soft)" role="status">{{ session('status') }}</div>
        @endif

        <form method="POST" action="{{ route('admin.login.store') }}" class="rounded-2xl border border-(--line) bg-(--white) p-6 shadow-(--shadow-soft) sm:p-8">
            @csrf
            <div>
                <label for="email" class="text-sm font-bold text-(--purple-950)">Email address</label>
                <input id="email" name="email" type="email" value="{{ old('email') }}" autocomplete="email" required autofocus class="mt-2 w-full rounded-xl border border-(--line-dark) bg-(--warm-white) px-4 py-3 text-sm outline-none transition focus:border-(--crimson)">
                @error('email')<p class="mt-1 text-xs text-(--crimson)">{{ $message }}</p>@enderror
            </div>
            <div class="mt-5">
                <label for="password" class="text-sm font-bold text-(--purple-950)">Password</label>
                <input id="password" name="password" type="password" autocomplete="current-password" required class="mt-2 w-full rounded-xl border border-(--line-dark) bg-(--warm-white) px-4 py-3 text-sm outline-none transition focus:border-(--crimson)">
                @error('password')<p class="mt-1 text-xs text-(--crimson)">{{ $message }}</p>@enderror
            </div>
            <label class="mt-5 flex items-center gap-3 text-sm text-(--ink-soft)">
                <input name="remember" type="checkbox" value="1" class="h-4 w-4 accent-(--crimson)">
                Remember me
            </label>
            <button type="submit" class="mt-8 w-full rounded-full bg-(--purple-950) px-6 py-3.5 text-sm font-bold text-white transition hover:bg-(--crimson)">Log in</button>
        </form>
    </section>
@endsection