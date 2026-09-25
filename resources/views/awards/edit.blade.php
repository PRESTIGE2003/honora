@extends('layouts.awards')

@section('title', 'Edit Award')

@section('content')
    <section class="mx-auto max-w-3xl px-6 py-16 lg:px-10">
        <a href="{{ route('awards.show', $award) }}" class="text-sm font-bold text-(--crimson) hover:underline">&lt;- Back to award</a>
        <p class="mt-12 font-mono text-xs font-semibold tracking-[0.25em] text-(--gold-dark) uppercase">Catalogue entry</p>
        <h1 class="mt-3 font-display text-4xl font-bold text-(--purple-950)">Edit award</h1>

        <form method="POST" action="{{ route('awards.update', $award) }}" class="mt-10 rounded-2xl border border-(--line) bg-(--white) p-6 shadow-(--shadow-soft) sm:p-8">
            @method('PUT')
            @include('awards._form', ['submitLabel' => 'Update award'])
        </form>
    </section>
@endsection