<!DOCTYPE html><html class="light" lang="en"><head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Login | ZNX</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=JetBrains+Mono:wght@500&amp;family=Geist:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
    <!-- Material Symbols -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "tertiary-fixed-dim": "#66d8d2",
                        "primary-container": "#131b2e",
                        "on-error": "#ffffff",
                        "tertiary-container": "#00201e",
                        "surface-variant": "#e0e3e5",
                        "secondary-fixed": "#d5e3fd",
                        "primary-fixed-dim": "#bec6e0",
                        "on-tertiary": "#ffffff",
                        "surface": "#f7f9fb",
                        "on-primary": "#ffffff",
                        "inverse-on-surface": "#eff1f3",
                        "surface-container-high": "#e6e8ea",
                        "error": "#ba1a1a",
                        "tertiary": "#000000",
                        "outline": "#76777d",
                        "surface-container-lowest": "#ffffff",
                        "surface-container-low": "#f2f4f6",
                        "on-surface-variant": "#45464d",
                        "on-primary-fixed": "#131b2e",
                        "surface-dim": "#d8dadc",
                        "on-secondary-container": "#57657b",
                        "primary": "#000000",
                        "on-secondary-fixed": "#0d1c2f",
                        "on-primary-container": "#7c839b",
                        "on-tertiary-fixed-variant": "#00504d",
                        "on-background": "#191c1e",
                        "secondary-container": "#d5e3fd",
                        "surface-tint": "#565e74",
                        "on-primary-fixed-variant": "#3f465c",
                        "surface-bright": "#f7f9fb",
                        "background": "#f7f9fb",
                        "inverse-primary": "#bec6e0",
                        "on-secondary": "#ffffff",
                        "on-tertiary-container": "#00938e",
                        "surface-container-highest": "#e0e3e5",
                        "surface-container": "#eceef0",
                        "tertiary-fixed": "#84f5ee",
                        "secondary-fixed-dim": "#b9c7e0",
                        "outline-variant": "#c6c6cd",
                        "on-surface": "#191c1e",
                        "primary-fixed": "#dae2fd",
                        "error-container": "#ffdad6",
                        "secondary": "#515f74",
                        "on-tertiary-fixed": "#00201e",
                        "on-secondary-fixed-variant": "#3a485c",
                        "on-error-container": "#93000a",
                        "inverse-surface": "#2d3133",
                        "accent-gold": "#ebb415"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem",
                        "input": "12px",
                        "button": "24px"
                    },
                    "spacing": {
                        "stack-sm": "8px",
                        "unit": "4px",
                        "gutter": "16px",
                        "stack-md": "16px",
                        "margin-mobile": "20px",
                        "container-max": "440px",
                        "stack-lg": "32px"
                    },
                    "fontFamily": {
                        "label-caps": ["JetBrains Mono"],
                        "headline-md": ["Geist"],
                        "headline-md-mobile": ["Geist"],
                        "button-text": ["Inter"],
                        "body-md": ["Inter"],
                        "display-lg": ["Geist"],
                        "body-lg": ["Inter"],
                        "headline-sm": ["Geist"]
                    },
                    "fontSize": {
                        "label-caps": ["12px", {"lineHeight": "16px", "letterSpacing": "0.05em", "fontWeight": "500"}],
                        "headline-md": ["24px", {"lineHeight": "32px", "letterSpacing": "-0.01em", "fontWeight": "600"}],
                        "headline-md-mobile": ["20px", {"lineHeight": "28px", "fontWeight": "600"}],
                        "button-text": ["14px", {"lineHeight": "20px", "fontWeight": "600"}],
                        "body-md": ["14px", {"lineHeight": "20px", "fontWeight": "400"}],
                        "display-lg": ["48px", {"lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                        "body-lg": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                        "headline-sm": ["20px", {"lineHeight": "28px", "fontWeight": "600"}]
                    }
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            display: inline-block;
            vertical-align: middle;
        }

        body {
            font-family: 'Geist', 'Inter', sans-serif;
            min-height: 100vh;
        }

        .split-layout {
            display: flex;
            min-height: 100vh;
            width: 100%;
        }

        .left-panel {
            background-color: #1a1e26;
            background-image:
            radial-gradient(circle at 50% 50%, rgba(255, 255, 255, 0.05) 1px, transparent 1px);
            background-size: 60px 60px;
            position: relative;
            overflow: hidden;
        }

        /* Subtle target/crosshair pattern simulation */
        .left-panel::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' stroke='%23ebb415' stroke-opacity='0.1' stroke-width='1'%3E%3Ccircle cx='50' cy='50' r='15'/%3E%3Cline x1='50' y1='30' x2='50' y2='70'/%3E%3Cline x1='30' y1='50' x2='70' y2='50'/%3E%3C/g%3E%3C/svg%3E");
            background-size: 100px 100px;
            pointer-events: none;
        }

        .illustration-card {
            background: rgba(25, 29, 37, 0.8);
            border: 1px solid rgba(235, 180, 21, 0.2);
            border-radius: 24px;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
        }

        .input-tinted {
            background-color: #f0f4f9;
            border: 1px solid transparent;
            transition: all 0.2s ease;
        }

        .input-tinted:focus {
            background-color: #ffffff;
            border-color: #ebb415;
            box-shadow: 0 0 0 4px rgba(235, 180, 21, 0.1);
            outline: none;
        }

        .carousel-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.3);
        }

        .carousel-dot.active {
            width: 24px;
            border-radius: 4px;
            background: #ffffff;
        }

        .live-chat-btn {
            box-shadow: 0 10px 15px -3px rgba(235, 180, 21, 0.3);
        }
    </style>
</head>
<body class="bg-white text-on-surface">
    <div class="split-layout">
        <!-- Left Side: Branding & Illustration -->
        <div class="left-panel hidden lg:flex flex-col items-center justify-center p-12 text-center lg:w-[60%]">
            <div class="illustration-card p-10 max-w-md relative z-10">
                <div class="mb-8">
                    <!-- Placeholder for 3D security illustration -->
                    <div class="relative inline-block">
                        <div class="w-64 h-64 bg-slate-800 rounded-2xl flex items-center justify-center overflow-hidden">
                            <!-- Simulation of the 3D character in reference -->
                            <div class="absolute inset-0 flex items-center justify-center">
                                <span class="material-symbols-outlined text-[120px] text-accent-gold opacity-20" style="font-variation-settings: 'FILL' 1;">admin_panel_settings</span>
                            </div>
                            <div class="relative z-10 flex flex-col items-center">
                                <span class="material-symbols-outlined text-[80px] text-green-500 mb-2" style="font-variation-settings: 'FILL' 1;">verified_user</span>
                                <span class="text-white font-headline-md">SYSTEM SECURE</span>
                            </div>
                        </div>
                    </div>
                </div>
                <h2 class="text-display-lg text-white font-headline-md mb-4 text-[32px] leading-tight">Jaga Akun NAS Sentinel Anda</h2>
                <p class="text-white/70 font-body-lg text-[14px]">Anda bertanggung jawab penuh terhadap keamanan akses sistem yang Anda miliki.</p>
            </div>
            <!-- Carousel indicators -->
            <div class="mt-12 flex gap-2">
                <div class="carousel-dot active"></div>
                <div class="carousel-dot"></div>
                <div class="carousel-dot"></div>
                <div class="carousel-dot"></div>
            </div>
        </div>
        <!-- Right Side: Login Form -->
        <div class="right-panel flex flex-col w-full bg-white relative lg:w-[40%]">
            <!-- Brand Identity Top -->
            <div class="p-8 lg:p-12">
                <div class="flex items-center gap-2">
                    <div class="w-10 h-10 bg-primary flex items-center justify-center rounded-lg">
                        <span class="material-symbols-outlined text-white" data-icon="shield" style="font-variation-settings: 'FILL' 1;">shield</span>
                    </div>
                    <span class="text-headline-sm font-bold tracking-tight text-primary">Zetware Network BoX</span>
                </div>
            </div>
            <!-- Main Form Content -->
            <div class="flex-grow flex items-center justify-center px-margin-mobile">
                <div class="w-full max-w-[440px]">
                    <div class="text-center mb-10">
                        <h1 class="text-[32px] font-bold text-primary mb-2">Masuk ZNX Sentinel</h1>
                    </div>

                    @if (session('status'))
                    <div class="mb-6 rounded-input bg-secondary-container px-4 py-3 text-center text-[14px] font-semibold text-on-secondary-container">
                        {{ session('status') }}
                    </div>
                    @endif

                    <livewire:auth.login />

                    {{-- ##form login komponen livewire --}}


                </div>
            </div>
            {{-- <form class="space-y-6" id="loginForm" method="POST" action="{{ route('login.store') }}">
                @csrf
                <!-- Username -->
                <div class="space-y-2">
                    <label class="block text-[14px] font-semibold text-primary ml-1" for="email">Operator ID</label>
                    <div class="relative">
                        <input class="w-full px-5 py-4 input-tinted rounded-input text-on-surface placeholder:text-outline @error('email') border-error bg-white @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="Masukkan ID Operator" type="email" required autofocus autocomplete="email">
                    </div>
                    @error('email')
                    <p class="ml-1 text-[14px] font-semibold text-error">{{ $message }}</p>
                    @enderror
                </div>
                <!-- Password -->
                <div class="space-y-2">
                    <label class="block text-[14px] font-semibold text-primary ml-1" for="password">Access Key</label>
                    <div class="relative">
                        <input class="w-full px-5 py-4 input-tinted rounded-input text-on-surface placeholder:text-outline pr-12 @error('password') border-error bg-white @enderror" id="password" name="password" placeholder="Masukkan Kata Sandi" type="password" required autocomplete="current-password">
                        <button class="absolute right-4 top-1/2 -translate-y-1/2 text-outline hover:text-primary transition-colors cursor-pointer" onclick="togglePasswordVisibility()" type="button">
                            <span class="material-symbols-outlined" data-icon="visibility" id="eyeIcon">visibility</span>
                        </button>
                    </div>
                    @error('password')
                    <p class="ml-1 text-[14px] font-semibold text-error">{{ $message }}</p>
                    @enderror
                </div>
                <!-- Submit Button -->
                <button class="w-full font-bold text-[16px] py-4 rounded-full active:scale-[0.98] transition-all hover:brightness-105 flex items-center justify-center gap-2 group mt-4 bg-primary text-white" id="signInBtn" type="submit">
                    <span class="">Masuk Akun</span>
                    <span class="material-symbols-outlined transition-transform group-hover:translate-x-1" data-icon="arrow_forward">arrow_forward</span>
                </button>
                <!-- Actions -->
                <div class="flex flex-col items-center gap-4 pt-4">
                    @if (Route::has('password.request'))
                    <a class="text-[14px] font-semibold text-primary hover:underline" href="{{ route('password.request') }}">Perlu Bantuan?</a>
                    @endif
                    <label class="flex items-center gap-2 cursor-pointer group">
                        <input class="w-4 h-4 rounded-sm border-outline text-accent-gold focus:ring-accent-gold/20 cursor-pointer" type="checkbox" name="remember" @checked(old('remember'))>
                        <span class="text-[14px] text-on-surface-variant group-hover:text-primary transition-colors">Keep Session Active</span>
                    </label>
                </div>
            </form> --}}


            <!-- Floating Live Chat -->
            <div class="absolute bottom-8 right-8">
                <button class="live-chat-btn bg-accent-gold text-primary px-6 py-3 rounded-full flex items-center gap-2 font-bold text-[14px] hover:brightness-110 transition-all">
                    <span class="material-symbols-outlined text-[20px]" data-icon="chat">chat</span>
                    <span class="">NAS Live Chat</span>
                </button>
            </div>
        </div>
    </div>
    <!-- Hidden metadata/scripts from source -->
    <div class="hidden">
        <img data-alt="A clean, minimalist high-tech server room with vertical server racks and blue LED lights reflecting on a polished dark floor." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDIumeNdWFR0GEp6MvSDfMweFua1XcihvQVBINA_TtFbhbxgd3B6M2C6iHn-ukPnvEMQrN7RkY0UNmEo-gmhvAmM9e2npXd5tqaA3CBzHTFFj1mseUaQNSADpfTI_C-3T7EMgNO2VmFPTyia7tyDiCouGkoua1im3Janwr1dlXMwMToIGbQDnJbtF_lJ8x3CW_6S1PIVM4vIT--rtp7UiuRyTFx82vCF-wHjPGTMoTifqE5DJXJTlWySS61UbOg3eFSvEqTXsgHoWgh">
    </div>
    <script>
        function togglePasswordVisibility() {
            const passwordInput = document.getElementById('password');
            const eyeIcon = document.getElementById('eyeIcon');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.textContent = 'visibility_off';
            } else {
                passwordInput.type = 'password';
                eyeIcon.textContent = 'visibility';
            }
        }

        const signInBtn = document.getElementById('signInBtn');
        const loginForm = document.getElementById('loginForm');

        loginForm.addEventListener('submit', () => {
            const originalText = signInBtn.querySelector('span:first-child').innerText;
            const originalIcon = signInBtn.querySelector('.material-symbols-outlined').innerText;

            signInBtn.disabled = true;
            signInBtn.classList.add('opacity-80');
            signInBtn.querySelector('span:first-child').innerText = 'Memverifikasi...';
            signInBtn.querySelector('.material-symbols-outlined').innerText = 'sync';
            signInBtn.querySelector('.material-symbols-outlined').classList.add('animate-spin');
        });
    </script>




</body></html>
