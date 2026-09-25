@extends('layouts.auth')

@section('title', 'Create Admin Account')

@section('content')
    <section class="mx-auto max-w-xl px-6 py-16 lg:px-10">
        <div class="mb-10 text-center">
            <p class="font-mono text-xs font-semibold tracking-[0.25em] text-(--gold-dark) uppercase">First access</p>
            <h1 class="mt-3 font-display text-4xl font-bold text-(--purple-950)">Create the admin account</h1>
            <p class="mt-4 text-sm leading-6 text-(--ink-soft)">This setup can only be completed once. Use an email address you control.</p>
        </div>

        <form method="POST" action="{{ route('admin.signup.store') }}" class="rounded-2xl border border-(--line) bg-(--white) p-6 shadow-(--shadow-soft) sm:p-8">
            @csrf
            @include('auth._account-fields')
            <button type="submit" class="mt-8 w-full rounded-full bg-(--purple-950) px-6 py-3.5 text-sm font-bold text-white transition hover:bg-(--crimson)">Create admin account</button>
            <p class="mt-6 text-center text-sm text-(--ink-soft)">Already set up? <a href="{{ route('admin.login') }}" class="font-bold text-(--crimson) hover:underline">Log in</a></p>
        </form>
    </section>
@endsection