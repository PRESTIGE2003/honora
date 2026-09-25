<div>
    <label for="name" class="text-sm font-bold text-(--purple-950)">Full name</label>
    <input id="name" name="name" type="text" value="{{ old('name') }}" autocomplete="name" required class="mt-2 w-full rounded-xl border border-(--line-dark) bg-(--warm-white) px-4 py-3 text-sm outline-none transition focus:border-(--crimson)">
    @error('name')<p class="mt-1 text-xs text-(--crimson)">{{ $message }}</p>@enderror
</div>
<div class="mt-5">
    <label for="email" class="text-sm font-bold text-(--purple-950)">Email address</label>
    <input id="email" name="email" type="email" value="{{ old('email') }}" autocomplete="email" required class="mt-2 w-full rounded-xl border border-(--line-dark) bg-(--warm-white) px-4 py-3 text-sm outline-none transition focus:border-(--crimson)">
    @error('email')<p class="mt-1 text-xs text-(--crimson)">{{ $message }}</p>@enderror
</div>
<div class="mt-5">
    <label for="password" class="text-sm font-bold text-(--purple-950)">Password</label>
    <input id="password" name="password" type="password" autocomplete="new-password" required class="mt-2 w-full rounded-xl border border-(--line-dark) bg-(--warm-white) px-4 py-3 text-sm outline-none transition focus:border-(--crimson)">
    @error('password')<p class="mt-1 text-xs text-(--crimson)">{{ $message }}</p>@enderror
</div>
<div class="mt-5">
    <label for="password_confirmation" class="text-sm font-bold text-(--purple-950)">Confirm password</label>
    <input id="password_confirmation" name="password_confirmation" type="password" autocomplete="new-password" required class="mt-2 w-full rounded-xl border border-(--line-dark) bg-(--warm-white) px-4 py-3 text-sm outline-none transition focus:border-(--crimson)">
</div>