@extends('layouts.awards')

@section('title', 'Award Catalogue')

@section('content')
    <section class="bg-(--navy-900) px-6 py-20 text-white lg:px-10">
        <div class="mx-auto max-w-7xl">
            <p class="font-mono text-xs font-semibold tracking-[0.25em] text-(--gold) uppercase">Recognition, curated</p>
            <div class="mt-4 flex flex-col justify-between gap-8 lg:flex-row lg:items-end">
                <div class="max-w-2xl">
                    <h1 class="font-display text-4xl font-bold tracking-tight sm:text-6xl">Award catalogue</h1>
                    <p class="mt-5 max-w-xl text-base leading-7 text-white/70">Explore thoughtful trophies, plaques and recognition packages designed to make every achievement feel worthy of the moment.</p>
                </div>
                <a href="{{ route('awards.create') }}" class="inline-flex w-fit items-center rounded-full bg-(--gold) px-6 py-3 text-sm font-bold text-(--purple-950) transition hover:-translate-y-0.5">Add an award</a>
            </div>
        </div>
    </section>

    <section class="mx-auto max-w-7xl px-6 py-16 lg:px-10">
        @if (session('success'))
            <div class="mb-8 border-l-4 border-(--gold) bg-white px-5 py-4 text-sm text-(--ink) shadow-(--shadow-soft)" role="status">{{ session('success') }}</div>
        @endif

        @if (isset($awards) && $awards->count())
            <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($awards as $award)
                    <article class="flex flex-col rounded-2xl border border-(--line) bg-(--white) p-6 shadow-(--shadow-soft)">
                        <div class="flex items-start justify-between gap-4">
                            <span class="rounded-full bg-(--gold)/15 px-3 py-1 text-xs font-semibold tracking-wider text-(--gold-dark) uppercase">{{ $award->category ?? 'Recognition' }}</span>
                            <span class="font-mono text-xs text-(--ink-soft)">{{ $award->year ?? now()->year }}</span>
                        </div>
                        <h2 class="mt-6 font-display text-2xl font-bold text-(--purple-950)">{{ $award->name ?? $award->title ?? 'Untitled award' }}</h2>
                        <p class="mt-3 flex-1 text-sm leading-6 text-(--ink-soft)">{{ $award->description ?? 'A considered recognition piece for an exceptional contribution.' }}</p>
                        <a href="{{ route('awards.show', $award) }}" class="mt-7 text-sm font-bold text-(--crimson) hover:underline">View award <span aria-hidden="true">-&gt;</span></a>
                    </article>
                @endforeach
            </div>

            @if (method_exists($awards, 'links'))
                <div class="mt-10">{{ $awards->links() }}</div>
            @endif
        @else
            <div class="border border-dashed border-(--line-dark) bg-(--white) px-6 py-16 text-center">
                <p class="font-mono text-xs font-semibold tracking-[0.25em] text-(--crimson) uppercase">Catalogue in progress</p>
                <h2 class="mt-3 font-display text-3xl font-bold text-(--purple-950)">Your first award starts here</h2>
                <p class="mx-auto mt-3 max-w-lg text-sm leading-6 text-(--ink-soft)">Add a trophy, plaque or custom recognition piece to begin building the catalogue.</p>
                <a href="{{ route('awards.create') }}" class="mt-7 inline-flex rounded-full bg-(--purple-950) px-6 py-3 text-sm font-bold text-white transition hover:bg-(--crimson)">Create an award</a>
            </div>
        @endif
    </section>
@endsection