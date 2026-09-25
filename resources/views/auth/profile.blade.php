@extends('layouts.auth')

@section('title', 'Admin Profile')

@section('content')
    <section class="mx-auto max-w-5xl px-6 py-16 lg:px-10">
        @if (session('status'))
            <div class="mb-8 border-l-4 border-(--gold) bg-(--white) px-5 py-4 text-sm shadow-(--shadow-soft)" role="status">{{ session('status') }}</div>
        @endif

        <div class="flex flex-col justify-between gap-6 border-b border-(--line) pb-8 sm:flex-row sm:items-end">
            <div>
                <p class="font-mono text-xs font-semibold tracking-[0.25em] text-(--gold-dark) uppercase">Admin profile</p>
                <h1 class="mt-3 font-display text-4xl font-bold text-(--purple-950)">Your account</h1>
            </div>
            <div class="flex gap-3">
                <a href="{{ route('admin.profile.edit') }}" class="rounded-full bg-(--purple-950) px-5 py-3 text-sm font-bold text-white transition hover:bg-(--crimson)">Edit profile</a>
                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <button type="submit" class="rounded-full border border-(--line-dark) px-5 py-3 text-sm font-bold text-(--ink-soft) transition hover:border-(--crimson) hover:text-(--crimson)">Log out</button>
                </form>
            </div>
        </div>

        <div class="mt-10 grid gap-6 sm:grid-cols-2">
            <div class="rounded-2xl border border-(--line) bg-(--white) p-6 shadow-(--shadow-soft)">
                <p class="text-xs font-bold tracking-wider text-(--gold-dark) uppercase">Name</p>
                <p class="mt-3 font-display text-2xl font-bold text-(--purple-950)">{{ $user->name }}</p>
            </div>
            <div class="rounded-2xl border border-(--line) bg-(--white) p-6 shadow-(--shadow-soft)">
                <p class="text-xs font-bold tracking-wider text-(--gold-dark) uppercase">Email</p>
                <p class="mt-3 break-all font-display text-2xl font-bold text-(--purple-950)">{{ $user->email }}</p>
            </div>
        </div>
    </section>
@endsection