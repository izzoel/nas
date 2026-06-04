<div>
    {{-- Tetap gunakan form wire:submit demi fitur tombol Enter --}}
    <form wire:submit="login" class="space-y-6">
        <flux:input
            type="email"
            label="Email"
            wire:model="form.email" {{-- Berubah menjadi form.email --}}
            icon="envelope"
            placeholder="nama@email.com"
            autocomplete="email"
            autofocus
            class="w-full"
        />

        <flux:input
            type="password"
            label="Password"
            wire:model="form.password" {{-- Berubah menjadi form.password --}}
            icon="lock-closed"
            placeholder="Masukkan password"
            autocomplete="current-password"
            viewable
            class="w-full"
        />

        <div class="flex items-center justify-between">
            <label class="flex items-center gap-2 text-sm text-zinc-600 dark:text-zinc-400 cursor-pointer">
                <input
                    type="checkbox"
                    wire:model="form.remember" {{-- Berubah menjadi form.remember --}}
                    class="rounded border-zinc-300 text-primary focus:ring-primary"
                >
                Ingat saya
            </label>

            <a href="{{ route('password.request') }}" class="text-sm font-medium text-primary hover:underline">
                Lupa password?
            </a>
        </div>

        {{-- Cukup type="submit", tidak perlu wire:click jika sudah dibungkus tag <form> --}}
        <flux:button type="submit" variant="primary" class="w-full justify-center">
            Masuk
        </flux:button>
    </form>
</div>
