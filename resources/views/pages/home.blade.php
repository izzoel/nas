<!DOCTYPE html>

<html class="light" lang="id"><head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>NAS Sentinel OS - Dashboard</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Geist:wght@100..900&amp;family=Inter:wght@100..900&amp;family=JetBrains+Mono:wght@100..800&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "surface-variant": "#e2e2e9",
                        "primary": "#000000",
                        "surface-tinted": "#f0f4f9",
                        "surface-container-low": "#f3f3fa",
                        "on-tertiary-fixed": "#181c24",
                        "on-error": "#ffffff",
                        "tertiary-fixed-dim": "#c3c6d1",
                        "secondary-fixed": "#d5e3fc",
                        "panel-dark": "#1a1e26",
                        "system-green": "#22c55e",
                        "on-surface": "#1a1b20",
                        "surface-dim": "#d9d9e0",
                        "surface": "#f9f9ff",
                        "on-secondary-fixed-variant": "#3a485c",
                        "on-tertiary-container": "#80848e",
                        "on-surface-variant": "#4c4546",
                        "secondary": "#515f74",
                        "surface-container-lowest": "#ffffff",
                        "accent-gold": "#ebb415",
                        "tertiary-fixed": "#dfe2ed",
                        "primary-fixed-dim": "#c6c6c6",
                        "inverse-on-surface": "#f0f0f7",
                        "background": "#f9f9ff",
                        "surface-bright": "#f9f9ff",
                        "error": "#ba1a1a",
                        "on-primary-fixed": "#1b1b1b",
                        "on-tertiary-fixed-variant": "#434750",
                        "on-secondary": "#ffffff",
                        "tertiary-container": "#181c24",
                        "on-primary": "#ffffff",
                        "surface-container": "#ededf4",
                        "outline": "#7e7576",
                        "surface-tint": "#5e5e5e",
                        "error-container": "#ffdad6",
                        "on-secondary-fixed": "#0d1c2e",
                        "surface-container-highest": "#e2e2e9",
                        "primary-fixed": "#e2e2e2",
                        "outline-variant": "#cfc4c5",
                        "primary-container": "#1b1b1b",
                        "on-background": "#1a1b20",
                        "on-secondary-container": "#556379",
                        "inverse-surface": "#2f3035",
                        "on-primary-container": "#848484",
                        "on-error-container": "#93000a",
                        "on-tertiary": "#ffffff",
                        "secondary-fixed-dim": "#b9c7e0",
                        "tertiary": "#000000",
                        "on-primary-fixed-variant": "#474747",
                        "surface-container-high": "#e8e7ee",
                        "inverse-primary": "#c6c6c6",
                        "secondary-container": "#d2e1fa"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    "spacing": {
                        "gutter": "16px",
                        "unit": "4px",
                        "margin-page": "32px",
                        "container-max": "440px",
                        "stack-sm": "8px",
                        "stack-md": "16px",
                        "stack-lg": "32px"
                    },
                    "fontFamily": {
                        "headline-sm": ["Geist"],
                        "body-md": ["Inter"],
                        "label-caps": ["JetBrains Mono"],
                        "headline-md": ["Geist"],
                        "body-lg": ["Inter"],
                        "button-text": ["Inter"],
                        "display-lg": ["Geist"]
                    },
                    "fontSize": {
                        "headline-sm": ["20px", {"lineHeight": "28px", "fontWeight": "600"}],
                        "body-md": ["14px", {"lineHeight": "20px", "fontWeight": "400"}],
                        "label-caps": ["12px", {"lineHeight": "16px", "letterSpacing": "0.05em", "fontWeight": "500"}],
                        "headline-md": ["32px", {"lineHeight": "40px", "fontWeight": "700"}],
                        "body-lg": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                        "button-text": ["16px", {"lineHeight": "20px", "fontWeight": "600"}],
                        "display-lg": ["48px", {"lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700"}]
                    }
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        body { background-color: #f3f3fa; }
    </style>
</head>
<body class="font-body-md text-on-surface selection:bg-accent-gold/30">
    <!-- Sidebar Navigation -->
    <aside class="h-full w-64 fixed left-0 top-0 bg-surface-container-lowest flex flex-col py-stack-lg border-r border-outline-variant z-50">
        <div class="px-gutter mb-8">
            <div class="flex items-center gap-3 mb-2">
                <span class="material-symbols-outlined text-primary text-3xl" style="font-variation-settings: 'FILL' 1;">security</span>
                <h1 class="font-headline-sm text-headline-sm font-black text-primary">Sentinel OS</h1>
            </div>
            <p class="text-on-surface-variant text-[12px] uppercase tracking-widest font-label-caps">Vigilant Storage</p>
        </div>
        <div class="px-4 mb-6">
            <button class="w-full bg-accent-gold text-primary font-bold py-3 px-6 rounded-xl flex items-center justify-center gap-2 shadow-lg hover:shadow-accent-gold/20 active:scale-95 transition-all">
                <span class="material-symbols-outlined">add</span>
                <span class="font-button-text">Tombol Baru</span>
            </button>
        </div>
        <nav class="flex-1 space-y-1">
            <a class="flex items-center gap-4 px-6 py-3 text-primary font-bold bg-secondary-container rounded-r-full transition-all" href="#">
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">folder_shared</span>
                <span class="font-body-md">File Saya</span>
            </a>
            <a class="flex items-center gap-4 px-6 py-3 text-on-surface-variant hover:bg-surface-container transition-all" href="#">
                <span class="material-symbols-outlined">group</span>
                <span class="font-body-md">Dibagikan</span>
            </a>
            <a class="flex items-center gap-4 px-6 py-3 text-on-surface-variant hover:bg-surface-container transition-all" href="#">
                <span class="material-symbols-outlined">schedule</span>
                <span class="font-body-md">Terbaru</span>
            </a>
            <a class="flex items-center gap-4 px-6 py-3 text-on-surface-variant hover:bg-surface-container transition-all" href="#">
                <span class="material-symbols-outlined">star</span>
                <span class="font-body-md">Berbintang</span>
            </a>
            <a class="flex items-center gap-4 px-6 py-3 text-on-surface-variant hover:bg-surface-container transition-all" href="#">
                <span class="material-symbols-outlined">delete</span>
                <span class="font-body-md">Sampah</span>
            </a>
        </nav>
        <div class="px-gutter pt-8 border-t border-outline-variant">
            <div class="flex items-center justify-between mb-2">
                <span class="text-[12px] font-label-caps text-on-surface-variant">PENYIMPANAN</span>
                <span class="text-[12px] font-label-caps text-primary font-bold">85%</span>
            </div>
            <div class="w-full bg-surface-container h-1.5 rounded-full overflow-hidden">
                <div class="bg-accent-gold h-full w-[85%]"></div>
            </div>
            <p class="mt-2 text-[11px] text-on-surface-variant">12.4 GB dari 15 GB digunakan</p>
        </div>
    </aside>
    <!-- Header / TopAppBar -->
    <header class="fixed top-0 left-64 right-0 h-16 bg-surface flex justify-between items-center px-gutter z-40">
        <div class="flex-1 max-w-2xl">
            <div class="relative group">
                <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-on-surface-variant group-focus-within:text-accent-gold transition-colors">search</span>
                <input class="w-full bg-surface-tinted border-none rounded-full py-2.5 pl-12 pr-4 focus:ring-2 focus:ring-accent-gold/20 focus:bg-surface-container-lowest transition-all placeholder:text-on-surface-variant" placeholder="Cari di Sentinel..." type="text"/>
            </div>
        </div>
        <div class="flex items-center gap-4 ml-gutter">
            <button class="p-2 text-on-surface-variant hover:bg-surface-container-high rounded-full transition-colors relative">
                <span class="material-symbols-outlined">notifications</span>
                <span class="absolute top-2 right-2 w-2 h-2 bg-accent-gold rounded-full border-2 border-surface"></span>
            </button>
            <button class="p-2 text-on-surface-variant hover:bg-surface-container-high rounded-full transition-colors">
                <span class="material-symbols-outlined">help</span>
            </button>
            <button class="p-2 text-on-surface-variant hover:bg-surface-container-high rounded-full transition-colors">
                <span class="material-symbols-outlined">settings</span>
            </button>
            <div class="h-8 w-8 rounded-full overflow-hidden ml-2 border border-outline-variant cursor-pointer active:scale-95 transition-transform">
                <img alt="User Profile" data-alt="A professional high-resolution headshot of a person with a friendly expression. The person is set against a clean, minimalist studio background with soft cinematic lighting. The aesthetic is modern, corporate, and crisp, using a palette of soft grays and bright whites to emphasize a high-tech security atmosphere." src="https://lh3.googleusercontent.com/aida-public/AB6AXuANwVNv0ay99YJIQOWTgfoIdW9ZSrLJ-d8PLpS-wdJNFoCDiDg634MOl--HeVtYf7VZm6q1eVR9V-pPWjxXXKLb2OSaBXO7SXCsA2rCPSeLUn056D__qGMlT0Hyx3cokajYpU1intH8lSdC2CW4wdqXjJ2ZIZfY7aF67bRi1EFK-hK-1H-3LUzc6PbmBOihT--b9whb1HmVeEjrMX0bkISgcTMGIK1WufzPh7XJosIKHA5DuaW7knRvFUuoOn6FEIKk-LPXSx3fXbHu"/>
            </div>
        </div>
    </header>
    <!-- Main Content Canvas -->
    <main class="ml-64 mt-16 p-margin-page">
        <!-- Breadcrumbs -->
        <nav class="flex items-center gap-2 mb-8 text-on-surface-variant">
            <span class="font-body-md hover:text-primary cursor-pointer transition-colors">File Saya</span>
            <span class="material-symbols-outlined text-sm">chevron_right</span>
            <span class="font-body-md font-bold text-primary">Proyek Alpha</span>
        </nav>
        <!-- Folders Section -->
        <section class="mb-12">
            <h2 class="font-headline-sm text-headline-sm text-primary mb-stack-md flex items-center gap-2">
                Folder
                <span class="h-px flex-1 bg-outline-variant/30"></span>
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 xl:grid-cols-5 gap-stack-md">
                <!-- Folder Card 1 -->
                <div class="bg-surface-container-lowest p-4 rounded-xl border border-transparent hover:border-accent-gold/40 hover:bg-white transition-all cursor-pointer group shadow-sm hover:shadow-md">
                    <div class="flex items-center justify-between mb-3">
                        <span class="material-symbols-outlined text-accent-gold text-4xl" style="font-variation-settings: 'FILL' 1;">folder</span>
                        <button class="opacity-0 group-hover:opacity-100 p-1 hover:bg-surface-container rounded transition-all">
                            <span class="material-symbols-outlined text-sm">more_vert</span>
                        </button>
                    </div>
                    <p class="font-bold text-primary truncate">Dokumen Teknis</p>
                    <p class="text-[12px] text-on-surface-variant">12 file • 450 MB</p>
                </div>
                <!-- Folder Card 2 -->
                <div class="bg-surface-container-lowest p-4 rounded-xl border border-transparent hover:border-accent-gold/40 hover:bg-white transition-all cursor-pointer group shadow-sm hover:shadow-md">
                    <div class="flex items-center justify-between mb-3">
                        <span class="material-symbols-outlined text-accent-gold text-4xl" style="font-variation-settings: 'FILL' 1;">folder</span>
                        <button class="opacity-0 group-hover:opacity-100 p-1 hover:bg-surface-container rounded transition-all">
                            <span class="material-symbols-outlined text-sm">more_vert</span>
                        </button>
                    </div>
                    <p class="font-bold text-primary truncate">Aset Desain UI</p>
                    <p class="text-[12px] text-on-surface-variant">84 file • 1.2 GB</p>
                </div>
                <!-- Folder Card 3 -->
                <div class="bg-surface-container-lowest p-4 rounded-xl border border-transparent hover:border-accent-gold/40 hover:bg-white transition-all cursor-pointer group shadow-sm hover:shadow-md">
                    <div class="flex items-center justify-between mb-3">
                        <span class="material-symbols-outlined text-accent-gold text-4xl" style="font-variation-settings: 'FILL' 1;">folder</span>
                        <button class="opacity-0 group-hover:opacity-100 p-1 hover:bg-surface-container rounded transition-all">
                            <span class="material-symbols-outlined text-sm">more_vert</span>
                        </button>
                    </div>
                    <p class="font-bold text-primary truncate">Backup Database</p>
                    <p class="text-[12px] text-on-surface-variant">3 file • 4.5 GB</p>
                </div>
                <!-- Folder Card 4 -->
                <div class="bg-surface-container-lowest p-4 rounded-xl border border-transparent hover:border-accent-gold/40 hover:bg-white transition-all cursor-pointer group shadow-sm hover:shadow-md">
                    <div class="flex items-center justify-between mb-3">
                        <span class="material-symbols-outlined text-accent-gold text-4xl" style="font-variation-settings: 'FILL' 1;">folder</span>
                        <button class="opacity-0 group-hover:opacity-100 p-1 hover:bg-surface-container rounded transition-all">
                            <span class="material-symbols-outlined text-sm">more_vert</span>
                        </button>
                    </div>
                    <p class="font-bold text-primary truncate">Video Demo</p>
                    <p class="text-[12px] text-on-surface-variant">5 file • 890 MB</p>
                </div>
            </div>
        </section>
        <!-- Recent Files Table -->
        <section>
            <div class="flex items-center justify-between mb-stack-md">
                <h2 class="font-headline-sm text-headline-sm text-primary">File Terbaru</h2>
                <div class="flex gap-2">
                    <button class="p-2 bg-surface-container-lowest border border-outline-variant rounded hover:bg-white transition-all">
                        <span class="material-symbols-outlined text-sm">view_list</span>
                    </button>
                    <button class="p-2 text-on-surface-variant hover:bg-surface-container rounded transition-all">
                        <span class="material-symbols-outlined text-sm">grid_view</span>
                    </button>
                </div>
            </div>
            <div class="bg-surface-container-lowest rounded-2xl overflow-hidden border border-outline-variant shadow-sm">
                <table class="w-full text-left border-collapse">
                    <thead class="bg-surface border-b border-outline-variant">
                        <tr>
                            <th class="px-gutter py-4 font-label-caps text-[12px] text-on-surface-variant">Nama</th>
                            <th class="px-gutter py-4 font-label-caps text-[12px] text-on-surface-variant">Pemilik</th>
                            <th class="px-gutter py-4 font-label-caps text-[12px] text-on-surface-variant">Terakhir Diubah</th>
                            <th class="px-gutter py-4 font-label-caps text-[12px] text-on-surface-variant">Ukuran File</th>
                            <th class="px-gutter py-4"></th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-outline-variant/30">
                        <!-- File 1: PDF -->
                        <tr class="hover:bg-surface transition-colors group">
                            <td class="px-gutter py-4">
                                <div class="flex items-center gap-3">
                                    <span class="material-symbols-outlined text-red-500" style="font-variation-settings: 'FILL' 1;">picture_as_pdf</span>
                                    <span class="font-bold text-primary group-hover:text-accent-gold transition-colors">Spesifikasi_Keamanan_V2.pdf</span>
                                </div>
                            </td>
                            <td class="px-gutter py-4 text-on-surface-variant">Admin System</td>
                            <td class="px-gutter py-4 text-on-surface-variant">2 jam yang lalu</td>
                            <td class="px-gutter py-4 text-on-surface-variant">2.4 MB</td>
                            <td class="px-gutter py-4 text-right">
                                <button class="p-2 hover:bg-surface-container rounded-full transition-all">
                                    <span class="material-symbols-outlined text-sm">download</span>
                                </button>
                            </td>
                        </tr>
                        <!-- File 2: Doc -->
                        <tr class="hover:bg-surface transition-colors group">
                            <td class="px-gutter py-4">
                                <div class="flex items-center gap-3">
                                    <span class="material-symbols-outlined text-blue-500" style="font-variation-settings: 'FILL' 1;">description</span>
                                    <span class="font-bold text-primary group-hover:text-accent-gold transition-colors">Laporan_Mingguan_Agustus.docx</span>
                                </div>
                            </td>
                            <td class="px-gutter py-4 text-on-surface-variant">Santi Susanti</td>
                            <td class="px-gutter py-4 text-on-surface-variant">Kemarin</td>
                            <td class="px-gutter py-4 text-on-surface-variant">856 KB</td>
                            <td class="px-gutter py-4 text-right">
                                <button class="p-2 hover:bg-surface-container rounded-full transition-all">
                                    <span class="material-symbols-outlined text-sm">download</span>
                                </button>
                            </td>
                        </tr>
                        <!-- File 3: Image -->
                        <tr class="hover:bg-surface transition-colors group">
                            <td class="px-gutter py-4">
                                <div class="flex items-center gap-3">
                                    <span class="material-symbols-outlined text-purple-500" style="font-variation-settings: 'FILL' 1;">image</span>
                                    <span class="font-bold text-primary group-hover:text-accent-gold transition-colors">Arsitektur_Sentinel_Final.png</span>
                                </div>
                            </td>
                            <td class="px-gutter py-4 text-on-surface-variant">Budi Raharjo</td>
                            <td class="px-gutter py-4 text-on-surface-variant">15 Agt 2023</td>
                            <td class="px-gutter py-4 text-on-surface-variant">12.5 MB</td>
                            <td class="px-gutter py-4 text-right">
                                <button class="p-2 hover:bg-surface-container rounded-full transition-all">
                                    <span class="material-symbols-outlined text-sm">download</span>
                                </button>
                            </td>
                        </tr>
                        <!-- File 4: Spreadsheet -->
                        <tr class="hover:bg-surface transition-colors group">
                            <td class="px-gutter py-4">
                                <div class="flex items-center gap-3">
                                    <span class="material-symbols-outlined text-green-600" style="font-variation-settings: 'FILL' 1;">table_chart</span>
                                    <span class="font-bold text-primary group-hover:text-accent-gold transition-colors">Anggaran_Infrastruktur_2024.xlsx</span>
                                </div>
                            </td>
                            <td class="px-gutter py-4 text-on-surface-variant">Finance Lead</td>
                            <td class="px-gutter py-4 text-on-surface-variant">12 Agt 2023</td>
                            <td class="px-gutter py-4 text-on-surface-variant">450 KB</td>
                            <td class="px-gutter py-4 text-right">
                                <button class="p-2 hover:bg-surface-container rounded-full transition-all">
                                    <span class="material-symbols-outlined text-sm">download</span>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </main>
    <!-- Floating Security Status (Micro-interaction) -->
    <div class="fixed bottom-gutter right-gutter z-50">
        <div class="bg-primary text-white p-3 rounded-full shadow-xl flex items-center gap-3 pr-6 hover:scale-105 transition-transform cursor-pointer">
            <div class="relative">
                <span class="material-symbols-outlined text-accent-gold text-2xl" style="font-variation-settings: 'FILL' 1;">verified_user</span>
                <span class="absolute -top-1 -right-1 w-3 h-3 bg-system-green rounded-full border-2 border-primary animate-pulse"></span>
            </div>
            <div>
                <p class="text-[10px] font-label-caps leading-none opacity-60">STATUS SISTEM</p>
                <p class="text-[14px] font-bold leading-tight">TERPROTEKSI</p>
            </div>
        </div>
    </div>
    <script>
        // Simple ripple effect or interaction feedback
        document.querySelectorAll('button, a, .cursor-pointer').forEach(element => {
            element.addEventListener('click', function(e) {
                // Potential micro-interaction logic
                console.log('Interacted with:', this.innerText || 'UI element');
            });
        });
    </script>
</body></html>
