@extends('layouts.awards')

@section('title', $award->name ?? $award->title ?? 'Award Details')

@section('content')
    <section class="mx-auto max-w-5xl px-6 py-16 lg:px-10">
        <a href="{{ route('awards.index') }}" class="text-sm font-bold text-(--crimson) hover:underline">&lt;- Back to catalogue</a>
        <article class="mt-10 overflow-hidden rounded-2xl bg-(--navy-900) text-white shadow-(--shadow-soft)">
            <div class="border-b border-white/10 px-6 py-12 sm:px-10">
                <span class="rounded-full bg-(--gold)/15 px-3 py-1 text-xs font-semibold tracking-wider text-(--gold) uppercase">{{ $award->category ?? 'Recognition' }}</span>
                <h1 class="mt-6 max-w-3xl font-display text-4xl font-bold sm:text-6xl">{{ $award->name ?? $award->title ?? 'Untitled award' }}</h1>
                <p class="mt-5 font-mono text-sm text-white/60">{{ $award->year ?? now()->year }}</p>
            </div>
            <div class="px-6 py-10 sm:px-10">
                <p class="max-w-2xl text-base leading-8 text-white/75">{{ $award->description ?? 'A considered recognition piece for an exceptional contribution.' }}</p>
                <div class="mt-10 flex flex-wrap gap-4">
                    <a href="{{ route('awards.edit', $award) }}" class="rounded-full bg-(--gold) px-6 py-3 text-sm font-bold text-(--purple-950)">Edit award</a>
                    <form method="POST" action="{{ route('awards.destroy', $award) }}" onsubmit="return confirm('Remove this award from the catalogue?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="rounded-full border border-white/20 px-6 py-3 text-sm font-bold text-white hover:bg-white/10">Remove</button>
                    </form>
                </div>
            </div>
        </article>
    </section>
@endsection