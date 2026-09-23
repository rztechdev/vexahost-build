<div 
    x-data="{ 
        mobileOpen: false,
        scrolled: false
    }"
    x-init="scrolled = (window.scrollY > 20); $watch('mobileOpen', val => document.body.classList.toggle('overflow-hidden', val))"
    @scroll.window.passive="scrolled = (window.scrollY > 20)"
>
    <!-- Sticky Header -->
    <header 
        class="fixed top-0 left-0 right-0 z-40 w-full transition-all duration-300"
        :class="scrolled
            ? 'py-2.5 sm:py-3 bg-white/90 dark:bg-zinc-950/90 backdrop-blur-md border-b border-zinc-200/80 dark:border-zinc-800/80 shadow-xs' 
            : 'py-3.5 sm:py-4 bg-transparent border-b border-transparent shadow-none'"
    >
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between">
            <!-- Brand Logo (Left) -->
            <a href="#hero" class="focus:outline-none focus-visible:ring-2 focus-visible:ring-[#EA580C] rounded-lg shrink-0">
                <x-logo variant="light" size="sm" />
            </a>

            <!-- Right-Aligned Nav Group (Menu + Ecosystem + Theme Toggle + CTA) -->
            <div class="hidden lg:flex items-center gap-5 xl:gap-7">
                <!-- Navigation Links beside CTA -->
                <nav class="flex items-center gap-5 xl:gap-6 text-sm font-medium text-slate-700 dark:text-zinc-300" aria-label="Navigasi Utama">
                    <a href="#layanan" class="group flex items-center py-1 hover:text-[#EA580C] dark:hover:text-[#FB923C] transition-colors">
                        <span class="relative pb-0.5">
                            Layanan
                            <span class="absolute bottom-0 left-0 h-[2px] bg-[#EA580C] transition-all duration-200 group-hover:w-full w-0"></span>
                        </span>
                    </a>
                    <a href="#paket-harga" class="group flex items-center py-1 hover:text-[#EA580C] dark:hover:text-[#FB923C] transition-colors">
                        <span class="relative pb-0.5">
                            Paket Harga
                            <span class="absolute bottom-0 left-0 h-[2px] bg-[#EA580C] transition-all duration-200 group-hover:w-full w-0"></span>
                        </span>
                    </a>
                    <a href="#proses" class="group flex items-center py-1 hover:text-[#EA580C] dark:hover:text-[#FB923C] transition-colors">
                        <span class="relative pb-0.5">
                            Cara Kerja
                            <span class="absolute bottom-0 left-0 h-[2px] bg-[#EA580C] transition-all duration-200 group-hover:w-full w-0"></span>
                        </span>
                    </a>
                    <a href="#kenapa-kami" class="group flex items-center py-1 hover:text-[#EA580C] dark:hover:text-[#FB923C] transition-colors">
                        <span class="relative pb-0.5">
                            Keunggulan
                            <span class="absolute bottom-0 left-0 h-[2px] bg-[#EA580C] transition-all duration-200 group-hover:w-full w-0"></span>
                        </span>
                    </a>
                    <a href="#faq" class="group flex items-center py-1 hover:text-[#EA580C] dark:hover:text-[#FB923C] transition-colors">
                        <span class="relative pb-0.5">
                            FAQ
                            <span class="absolute bottom-0 left-0 h-[2px] bg-[#EA580C] transition-all duration-200 group-hover:w-full w-0"></span>
                        </span>
                    </a>

                    <!-- Ecosystem Links with Official VexaHost Diagonal Arrow (M7 17L17 7H7M17 7V17) -->
                    <a 
                        href="https://wa.vexahostcloud.my.id" 
                        target="_blank" 
                        rel="noopener noreferrer" 
                        class="group flex items-center gap-1 py-1 hover:text-[#EA580C] dark:hover:text-[#FB923C] transition-colors text-slate-700 dark:text-zinc-300"
                        title="VexaHost WhatsApp Gateway API"
                    >
                        <span class="relative pb-0.5">
                            WA Gateway
                            <span class="absolute bottom-0 left-0 h-[2px] bg-[#EA580C] transition-all duration-200 group-hover:w-full w-0"></span>
                        </span>
                        <svg class="w-3 h-3 text-slate-400 group-hover:text-[#EA580C] dark:group-hover:text-[#FB923C] group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 17L17 7H7M17 7V17"/>
                        </svg>
                    </a>

                    <a 
                        href="https://vexahostcloud.my.id" 
                        target="_blank" 
                        rel="noopener noreferrer" 
                        class="group flex items-center gap-1 py-1 hover:text-[#EA580C] dark:hover:text-[#FB923C] transition-colors text-slate-700 dark:text-zinc-300"
                        title="VexaHost Cloud VPS Server"
                    >
                        <span class="relative pb-0.5">
                            VPS
                            <span class="absolute bottom-0 left-0 h-[2px] bg-[#EA580C] transition-all duration-200 group-hover:w-full w-0"></span>
                        </span>
                        <svg class="w-3 h-3 text-slate-400 group-hover:text-[#EA580C] dark:group-hover:text-[#FB923C] group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 17L17 7H7M17 7V17"/>
                        </svg>
                    </a>
                </nav>

                <!-- Theme Toggle Button (Desktop) -->
                <button 
                    @click="toggleTheme()" 
                    type="button"
                    class="p-2 rounded-xl text-slate-500 dark:text-zinc-400 hover:text-[#EA580C] dark:hover:text-[#FB923C] hover:bg-zinc-100 dark:hover:bg-zinc-800/80 transition-colors focus:outline-none focus-visible:ring-2 focus-visible:ring-[#EA580C]"
                    aria-label="Ganti Tema"
                    title="Ganti Mode Gelap / Terang"
                >
                    <svg x-show="darkMode" x-cloak class="w-4.5 h-4.5 text-amber-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                    <svg x-show="!darkMode" class="w-4.5 h-4.5 text-[#595952]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                    </svg>
                </button>

                <!-- Desktop CTA Button -->
                <a 
                    href="https://wa.me/6285808749131?text=Halo%20VexaHost,%20saya%20tertarik%20untuk%20konsultasi%20pembuatan%20website%20untuk%20usaha%20saya."
                    target="_blank"
                    rel="noopener noreferrer"
                    class="inline-flex items-center gap-1.5 px-4 py-2 rounded-xl bg-[#EA580C] hover:bg-[#C2410C] text-white text-xs lg:text-sm font-semibold shadow-xs hover:shadow-md transition-all duration-200 active:scale-95 group rz-focus-ring shrink-0"
                >
                    <span>Konsultasi Gratis</span>
                    <svg class="w-3.5 h-3.5 transition-transform group-hover:translate-x-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </a>
            </div>

            <!-- Mobile Controls (Theme Toggle + Hamburger) -->
            <div class="flex items-center gap-2 lg:hidden">
                <!-- Theme Toggle Button (Mobile) -->
                <button 
                    @click="toggleTheme()" 
                    type="button"
                    class="p-2 rounded-xl bg-zinc-100 dark:bg-zinc-800 text-[#2E2E2A] dark:text-zinc-200 hover:bg-zinc-200 dark:hover:bg-zinc-700 focus:outline-none focus:ring-2 focus:ring-[#EA580C] transition-colors"
                    aria-label="Ganti Tema"
                >
                    <svg x-show="darkMode" x-cloak class="w-5 h-5 text-amber-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                    <svg x-show="!darkMode" class="w-5 h-5 text-[#595952]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                    </svg>
                </button>

                <!-- Mobile Hamburger Button -->
                <button 
                    @click="mobileOpen = !mobileOpen"
                    type="button" 
                    class="p-2 rounded-xl bg-zinc-100 dark:bg-zinc-800 text-[#2E2E2A] dark:text-zinc-200 hover:bg-zinc-200 dark:hover:bg-zinc-700 focus:outline-none focus:ring-2 focus:ring-[#EA580C] transition-colors"
                    aria-label="Buka Menu"
                    :aria-expanded="mobileOpen"
                >
                    <svg x-show="!mobileOpen" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    <svg x-show="mobileOpen" x-cloak class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
    </header>

    <!-- Mobile Drawer (Muncul dari Bawah ke Atas / Bottom Sheet seperti WA Gateway) -->
    <div 
        x-show="mobileOpen"
        x-cloak
        x-transition:enter="transition-transform duration-300 ease-out"
        x-transition:enter-start="translate-y-full"
        x-transition:enter-end="translate-y-0"
        x-transition:leave="transition-transform duration-250 ease-in"
        x-transition:leave-start="translate-y-0"
        x-transition:leave-end="translate-y-full"
        class="fixed inset-0 z-50 flex flex-col bg-white dark:bg-zinc-950 text-[#2E2E2A] dark:text-zinc-100 lg:hidden"
    >
        <!-- Drawer Top Bar (Logo + Close X Button) -->
        <div class="flex items-center justify-between border-b border-zinc-200 dark:border-zinc-800 px-5 py-3.5">
            <a href="#hero" @click="mobileOpen = false" class="focus:outline-none">
                <x-logo variant="light" size="sm" />
            </a>
            <button 
                @click="mobileOpen = false" 
                class="p-2 rounded-xl text-zinc-500 hover:text-zinc-900 dark:text-zinc-400 dark:hover:text-zinc-100 hover:bg-zinc-100 dark:hover:bg-zinc-800 transition-colors" 
                aria-label="Tutup Menu"
            >
                <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>

        <!-- Drawer Body (Scrollable Menu) -->
        <div class="flex-1 space-y-5 overflow-y-auto px-6 py-5">
            <div class="space-y-1.5">
                <p class="text-xs font-semibold uppercase tracking-wider text-zinc-400 dark:text-zinc-500">Navigasi Utama</p>
                <div class="space-y-1 pl-1">
                    <a @click="mobileOpen = false" href="#layanan" class="block py-1.5 text-sm font-medium text-slate-700 dark:text-zinc-200 hover:text-[#EA580C] dark:hover:text-[#FB923C] transition-colors">
                        Layanan
                    </a>
                    <a @click="mobileOpen = false" href="#paket-harga" class="block py-1.5 text-sm font-medium text-slate-700 dark:text-zinc-200 hover:text-[#EA580C] dark:hover:text-[#FB923C] transition-colors">
                        Paket Harga
                    </a>
                    <a @click="mobileOpen = false" href="#proses" class="block py-1.5 text-sm font-medium text-slate-700 dark:text-zinc-200 hover:text-[#EA580C] dark:hover:text-[#FB923C] transition-colors">
                        Cara Kerja
                    </a>
                    <a @click="mobileOpen = false" href="#kenapa-kami" class="block py-1.5 text-sm font-medium text-slate-700 dark:text-zinc-200 hover:text-[#EA580C] dark:hover:text-[#FB923C] transition-colors">
                        Keunggulan
                    </a>
                    <a @click="mobileOpen = false" href="#testimoni" class="block py-1.5 text-sm font-medium text-slate-700 dark:text-zinc-200 hover:text-[#EA580C] dark:hover:text-[#FB923C] transition-colors">
                        Testimoni
                    </a>
                    <a @click="mobileOpen = false" href="#faq" class="block py-1.5 text-sm font-medium text-slate-700 dark:text-zinc-200 hover:text-[#EA580C] dark:hover:text-[#FB923C] transition-colors">
                        FAQ
                    </a>
                </div>
            </div>

            <!-- Ekosistem VexaHost Links -->
            <div class="border-t border-zinc-200 dark:border-zinc-800 pt-4 space-y-1.5">
                <p class="text-xs font-semibold uppercase tracking-wider text-zinc-400 dark:text-zinc-500">Ekosistem VexaHost</p>
                <div class="space-y-1 pl-1">
                    <a 
                        href="https://wa.vexahostcloud.my.id" 
                        target="_blank" 
                        rel="noopener noreferrer" 
                        class="flex w-full items-center justify-between py-1.5 text-sm font-medium text-slate-700 dark:text-zinc-200 hover:text-[#EA580C] dark:hover:text-[#FB923C] transition-colors group"
                    >
                        <span>WA Gateway</span>
                        <svg class="h-4 w-4 text-zinc-400 group-hover:text-[#EA580C] dark:group-hover:text-[#FB923C] transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 17L17 7H7M17 7V17"/>
                        </svg>
                    </a>
                    <a 
                        href="https://vexahostcloud.my.id" 
                        target="_blank" 
                        rel="noopener noreferrer" 
                        class="flex w-full items-center justify-between py-1.5 text-sm font-medium text-slate-700 dark:text-zinc-200 hover:text-[#EA580C] dark:hover:text-[#FB923C] transition-colors group"
                    >
                        <span>Cloud VPS</span>
                        <svg class="h-4 w-4 text-zinc-400 group-hover:text-[#EA580C] dark:group-hover:text-[#FB923C] transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 17L17 7H7M17 7V17"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Theme Switcher -->
            <div class="border-t border-zinc-200 dark:border-zinc-800 pt-3">
                <button @click="toggleTheme()" class="flex w-full items-center justify-between py-1.5 text-sm font-medium text-slate-700 dark:text-zinc-200">
                    <span>Tema Tampilan</span>
                    <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-lg bg-zinc-100 dark:bg-zinc-800 text-xs text-zinc-600 dark:text-zinc-300">
                        <svg x-show="darkMode" x-cloak class="w-4 h-4 text-amber-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                        <svg x-show="!darkMode" class="w-4 h-4 text-[#595952]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                        </svg>
                        <span x-text="darkMode ? 'Gelap' : 'Terang'"></span>
                    </span>
                </button>
            </div>
        </div>

        {{-- Bottom Bar: Fixed / Pinned Action --}}
        <div class="shrink-0 border-t border-zinc-200 dark:border-zinc-800 bg-white/95 dark:bg-zinc-950/95 backdrop-blur-md p-4 pb-[max(1rem,env(safe-area-inset-bottom))] sm:px-6">
            <a 
                href="https://wa.me/6285808749131?text=Halo%20VexaHost,%20saya%20tertarik%20untuk%20konsultasi%20pembuatan%20website%20untuk%20usaha%20saya."
                target="_blank"
                rel="noopener noreferrer"
                class="flex w-full items-center justify-center gap-2 rounded-xl bg-[#EA580C] hover:bg-[#C2410C] px-4 py-3 text-sm font-bold text-white shadow-md active:scale-95 transition-all"
            >
                <svg class="w-4.5 h-4.5 fill-current" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                <span>Konsultasi Gratis via WhatsApp</span>
            </a>
        </div>
    </div>
</div>
