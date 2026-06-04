<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light">
    <head>
        @include('partials.head', ['title' => __('Login | NAS Sentinel OS')])
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@500&family=Geist:wght@400;500;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">

        <style>
        .nas-login-shell {
            min-height: 100vh;
            width: 100%;
            font-family: 'Geist', 'Inter', sans-serif;
            color: #191c1e;
            background: #ffffff;
        }

        .nas-left-panel {
            background-color: #1a1e26;
            background-image: radial-gradient(circle at 50% 50%, rgba(255, 255, 255, 0.05) 1px, transparent 1px);
            background-size: 60px 60px;
            position: relative;
            overflow: hidden;
        }

        .nas-left-panel::before {
            content: "";
            position: absolute;
            inset: 0;
            background-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' stroke='%23ebb415' stroke-opacity='0.1' stroke-width='1'%3E%3Ccircle cx='50' cy='50' r='15'/%3E%3Cline x1='50' y1='30' x2='50' y2='70'/%3E%3Cline x1='30' y1='50' x2='70' y2='50'/%3E%3C/g%3E%3C/svg%3E");
            background-size: 100px 100px;
            pointer-events: none;
        }

        .nas-illustration-card {
            background: rgba(25, 29, 37, 0.8);
            border: 1px solid rgba(235, 180, 21, 0.2);
            border-radius: 24px;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
        }

        .nas-input {
            width: 100%;
            border-radius: 12px;
            border: 1px solid transparent;
            background-color: #f0f4f9;
            padding: 1rem 1.25rem;
            color: #191c1e;
            transition: all 0.2s ease;
        }

        .nas-input::placeholder {
            color: #76777d;
        }

        .nas-input:focus {
            background-color: #ffffff;
            border-color: #ebb415;
            box-shadow: 0 0 0 4px rgba(235, 180, 21, 0.1);
            outline: none;
        }

        .nas-live-chat-btn {
            box-shadow: 0 10px 15px -3px rgba(235, 180, 21, 0.3);
        }

        .material-symbols-outlined {
            display: inline-block;
            vertical-align: middle;
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        </style>
    </head>

    <body class="bg-white antialiased">
        <div class="nas-login-shell flex">
        <div class="nas-left-panel hidden flex-col items-center justify-center p-12 text-center lg:flex lg:w-[60%]">
            <div class="nas-illustration-card relative z-10 max-w-md p-10">
                <div class="mb-8">
                    <div class="relative inline-block">
                        <div class="relative flex h-64 w-64 items-center justify-center overflow-hidden rounded-2xl bg-slate-800">
                            <div class="absolute inset-0 flex items-center justify-center">
                                <span class="material-symbols-outlined text-[120px] text-[#ebb415] opacity-20" style="font-variation-settings: 'FILL' 1;">admin_panel_settings</span>
                            </div>
                            <div class="relative z-10 flex flex-col items-center">
                                <span class="material-symbols-outlined mb-2 text-[80px] text-green-500" style="font-variation-settings: 'FILL' 1;">verified_user</span>
                                <span class="text-xl font-semibold text-white">SYSTEM SECURE</span>
                            </div>
                        </div>
                    </div>
                </div>

                <h2 class="mb-4 text-[32px] font-semibold leading-tight text-white">Jaga Akun NAS Sentinel Anda</h2>
                <p class="text-sm leading-6 text-white/70">Anda bertanggung jawab penuh terhadap keamanan akses sistem yang Anda miliki.</p>
            </div>

            <div class="mt-12 flex gap-2">
                <div class="h-2 w-6 rounded bg-white"></div>
                <div class="h-2 w-2 rounded-full bg-white/30"></div>
                <div class="h-2 w-2 rounded-full bg-white/30"></div>
                <div class="h-2 w-2 rounded-full bg-white/30"></div>
            </div>
        </div>

        <div class="relative flex w-full flex-col bg-white lg:w-[40%]">
            <div class="p-8 lg:p-12">
                <a href="{{ route('home') }}" class="flex items-center gap-2" wire:navigate>
                    <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-black">
                        <span class="material-symbols-outlined text-white" style="font-variation-settings: 'FILL' 1;">shield</span>
                    </div>
                    <span class="text-xl font-bold tracking-tight text-black">NAS Sentinel OS</span>
                </a>
            </div>

            <div class="flex flex-grow items-center justify-center px-5 pb-28 lg:pb-20">
                <div class="w-full max-w-[440px]">
                    <div class="mb-10 text-center">
                        <h1 class="mb-2 text-[32px] font-bold text-black">Masuk NAS Sentinel</h1>
                    </div>

                    <x-auth-session-status class="mb-6 text-center" :status="session('status')" />

                    <x-passkey-verify />

                    <form method="POST" action="{{ route('login.store') }}" class="space-y-6" x-data="{ showPassword: false, submitting: false }" x-on:submit="submitting = true">
                        @csrf

                        <div class="space-y-2">
                            <label class="ml-1 block text-sm font-semibold text-black" for="email">Operator ID</label>
                            <input
                                class="nas-input @error('email') !border-[#ba1a1a] @enderror"
                                id="email"
                                name="email"
                                value="{{ old('email') }}"
                                placeholder="Masukkan ID Operator"
                                type="email"
                                required
                                autofocus
                                autocomplete="email"
                            >
                            @error('email')
                                <p class="ml-1 text-sm font-medium text-[#ba1a1a]">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="space-y-2">
                            <label class="ml-1 block text-sm font-semibold text-black" for="password">Access Key</label>
                            <div class="relative">
                                <input
                                    class="nas-input pr-12 @error('password') !border-[#ba1a1a] @enderror"
                                    id="password"
                                    name="password"
                                    placeholder="Masukkan Kata Sandi"
                                    x-bind:type="showPassword ? 'text' : 'password'"
                                    required
                                    autocomplete="current-password"
                                >
                                <button
                                    class="absolute right-4 top-1/2 -translate-y-1/2 cursor-pointer text-[#76777d] transition-colors hover:text-black"
                                    type="button"
                                    x-on:click="showPassword = ! showPassword"
                                    aria-label="Tampilkan atau sembunyikan kata sandi"
                                >
                                    <span class="material-symbols-outlined" x-text="showPassword ? 'visibility_off' : 'visibility'">visibility</span>
                                </button>
                            </div>
                            @error('password')
                                <p class="ml-1 text-sm font-medium text-[#ba1a1a]">{{ $message }}</p>
                            @enderror
                        </div>

                        <button
                            class="group mt-4 flex w-full items-center justify-center gap-2 rounded-full bg-black py-4 text-base font-bold text-white transition-all hover:brightness-105 active:scale-[0.98] disabled:cursor-wait disabled:opacity-80"
                            type="submit"
                            data-test="login-button"
                            x-bind:disabled="submitting"
                        >
                            <span x-text="submitting ? 'Memverifikasi...' : 'Masuk Akun'">Masuk Akun</span>
                            <span class="material-symbols-outlined transition-transform group-hover:translate-x-1" x-bind:class="{ 'animate-spin': submitting }" x-text="submitting ? 'sync' : 'arrow_forward'">arrow_forward</span>
                        </button>

                        <div class="flex flex-col items-center gap-4 pt-4">
                            @if (Route::has('password.request'))
                                <a class="text-sm font-semibold text-black hover:underline" href="{{ route('password.request') }}" wire:navigate>Perlu Bantuan?</a>
                            @endif

                            <label class="group flex cursor-pointer items-center gap-2">
                                <input
                                    class="h-4 w-4 cursor-pointer rounded-sm border-[#76777d] text-[#ebb415] focus:ring-[#ebb415]/20"
                                    type="checkbox"
                                    name="remember"
                                    @checked(old('remember'))
                                >
                                <span class="text-sm text-[#45464d] transition-colors group-hover:text-black">Keep Session Active</span>
                            </label>
                        </div>
                    </form>
                </div>
            </div>

            <div class="absolute bottom-8 right-8">
                <button class="nas-live-chat-btn flex items-center gap-2 rounded-full bg-[#ebb415] px-6 py-3 text-sm font-bold text-black transition-all hover:brightness-110" type="button">
                    <span class="material-symbols-outlined text-xl">chat</span>
                    <span>NAS Live Chat</span>
                </button>
            </div>
        </div>
        </div>

        @persist('toast')
            <flux:toast.group>
                <flux:toast />
            </flux:toast.group>
        @endpersist

        @fluxScripts
    </body>
</html>
