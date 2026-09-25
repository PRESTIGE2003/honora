@csrf

<div class="grid gap-6 sm:grid-cols-2">
    <div class="sm:col-span-2">
        <label for="name" class="text-sm font-bold text-(--purple-950)">Award name</label>
        <input id="name" name="name" type="text" value="{{ old('name', $award->name ?? '') }}" required class="mt-2 w-full border border-(--line-dark) bg-(--white) px-4 py-3 text-sm outline-none transition focus:border-(--crimson)" placeholder="e.g. Excellence in Leadership">
        @error('name')<p class="mt-1 text-xs text-(--crimson)">{{ $message }}</p>@enderror
    </div>

    <div>
        <label for="category" class="text-sm font-bold text-(--purple-950)">Category</label>
        <input id="category" name="category" type="text" value="{{ old('category', $award->category ?? '') }}" class="mt-2 w-full border border-(--line-dark) bg-(--white) px-4 py-3 text-sm outline-none transition focus:border-(--crimson)" placeholder="Corporate, church, team...">
        @error('category')<p class="mt-1 text-xs text-(--crimson)">{{ $message }}</p>@enderror
    </div>

    <div>
        <label for="year" class="text-sm font-bold text-(--purple-950)">Year</label>
        <input id="year" name="year" type="number" min="1900" max="2100" value="{{ old('year', $award->year ?? now()->year) }}" class="mt-2 w-full border border-(--line-dark) bg-(--white) px-4 py-3 text-sm outline-none transition focus:border-(--crimson)">
        @error('year')<p class="mt-1 text-xs text-(--crimson)">{{ $message }}</p>@enderror
    </div>

    <div class="sm:col-span-2">
        <label for="description" class="text-sm font-bold text-(--purple-950)">Description</label>
        <textarea id="description" name="description" rows="5" class="mt-2 w-full border border-(--line-dark) bg-(--white) px-4 py-3 text-sm outline-none transition focus:border-(--crimson)" placeholder="Describe the award and the achievement it celebrates.">{{ old('description', $award->description ?? '') }}</textarea>
        @error('description')<p class="mt-1 text-xs text-(--crimson)">{{ $message }}</p>@enderror
    </div>
</div>

<div class="mt-8 flex flex-wrap items-center gap-4">
    <button type="submit" class="rounded-full bg-(--purple-950) px-6 py-3 text-sm font-bold text-white transition hover:bg-(--crimson)">{{ $submitLabel }}</button>
    <a href="{{ route('awards.index') }}" class="text-sm font-bold text-(--ink-soft) hover:text-(--crimson)">Cancel</a>
</div>