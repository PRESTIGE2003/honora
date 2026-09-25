@extends('layouts.awards')

@section('title', 'Add an Award')

@section('content')
    <section class="mx-auto max-w-3xl px-6 py-16 lg:px-10">
        <a href="{{ route('awards.index') }}" class="text-sm font-bold text-(--crimson) hover:underline">&lt;- Back to catalogue</a>
        <p class="mt-12 font-mono text-xs font-semibold tracking-[0.25em] text-(--gold-dark) uppercase">New catalogue entry</p>
        <h1 class="mt-3 font-display text-4xl font-bold text-(--purple-950)">Add an award</h1>
        <p class="mt-3 text-sm leading-6 text-(--ink-soft)">Capture the details your team needs when planning a recognition moment.</p>

        <form method="POST" action="{{ route('awards.store') }}" class="mt-10 rounded-2xl border border-(--line) bg-(--white) p-6 shadow-(--shadow-soft) sm:p-8">
            @include('awards._form', ['submitLabel' => 'Save award'])
        </form>
    </section>
@endsection