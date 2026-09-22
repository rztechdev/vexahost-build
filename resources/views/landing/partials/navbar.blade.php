<header 
    x-data="{ 
        mobileOpen: false,
        scrolled: false
    }"
    x-init="scrolled = (window.scrollY > 20)"
    @scroll.window.passive="scrolled = (window.scrollY > 20)"
    class="fixed top-0 left-0 right-0 z-50 w-full transition-all duration-300"
    :class="(scrolled || mobileOpen)
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

    <!-- Mobile Dropdown Menu -->
    <div 
        x-show="mobileOpen"
        x-cloak
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-3"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-3"
        @click.away="mobileOpen = false"
        class="lg:hidden px-4 pt-3 pb-6 bg-white/98 dark:bg-zinc-900/98 backdrop-blur-md border-b border-zinc-200 dark:border-zinc-800 shadow-xl mt-2 rounded-2xl mx-4"
    >
        <div class="flex flex-col space-y-2 pt-1">
            <a @click="mobileOpen = false" href="#layanan" class="px-3 py-2 rounded-lg text-sm font-medium text-slate-700 dark:text-zinc-200 hover:bg-zinc-100 dark:hover:bg-zinc-800 transition-colors">
                Layanan
            </a>
            <a @click="mobileOpen = false" href="#paket-harga" class="px-3 py-2 rounded-lg text-sm font-medium text-slate-700 dark:text-zinc-200 hover:bg-zinc-100 dark:hover:bg-zinc-800 transition-colors">
                Paket Harga
            </a>
            <a @click="mobileOpen = false" href="#proses" class="px-3 py-2 rounded-lg text-sm font-medium text-slate-700 dark:text-zinc-200 hover:bg-zinc-100 dark:hover:bg-zinc-800 transition-colors">
                Cara Kerja
            </a>
            <a @click="mobileOpen = false" href="#kenapa-kami" class="px-3 py-2 rounded-lg text-sm font-medium text-slate-700 dark:text-zinc-200 hover:bg-zinc-100 dark:hover:bg-zinc-800 transition-colors">
                Keunggulan
            </a>
            <a @click="mobileOpen = false" href="#testimoni" class="px-3 py-2 rounded-lg text-sm font-medium text-slate-700 dark:text-zinc-200 hover:bg-zinc-100 dark:hover:bg-zinc-800 transition-colors">
                Testimoni
            </a>
            <a @click="mobileOpen = false" href="#faq" class="px-3 py-2 rounded-lg text-sm font-medium text-slate-700 dark:text-zinc-200 hover:bg-zinc-100 dark:hover:bg-zinc-800 transition-colors">
                FAQ
            </a>

            <!-- Ekosistem VexaHost Links with Official Arrow in Mobile -->
            <div class="pt-3 border-t border-zinc-200 dark:border-zinc-800 space-y-1">
                <a 
                    href="https://wa.vexahostcloud.my.id" 
                    target="_blank" 
                    rel="noopener noreferrer" 
                    class="flex items-center justify-between px-3 py-2 rounded-lg text-sm font-medium text-slate-700 dark:text-zinc-200 hover:bg-zinc-100 dark:hover:bg-zinc-800 hover:text-[#EA580C] dark:hover:text-[#FB923C] transition-colors group"
                >
                    <span>WA Gateway</span>
                    <svg class="w-3.5 h-3.5 text-slate-400 group-hover:text-[#EA580C] transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 17L17 7H7M17 7V17"/>
                    </svg>
                </a>
                <a 
                    href="https://vexahostcloud.my.id" 
                    target="_blank" 
                    rel="noopener noreferrer" 
                    class="flex items-center justify-between px-3 py-2 rounded-lg text-sm font-medium text-slate-700 dark:text-zinc-200 hover:bg-zinc-100 dark:hover:bg-zinc-800 hover:text-[#EA580C] dark:hover:text-[#FB923C] transition-colors group"
                >
                    <span>VPS</span>
                    <svg class="w-3.5 h-3.5 text-slate-400 group-hover:text-[#EA580C] transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 17L17 7H7M17 7V17"/>
                    </svg>
                </a>
            </div>

            <!-- WhatsApp Action Button -->
            <div class="pt-3">
                <a 
                    href="https://wa.me/6285808749131?text=Halo%20VexaHost,%20saya%20tertarik%20untuk%20konsultasi%20pembuatan%20website%20untuk%20usaha%20saya."
                    target="_blank"
                    rel="noopener noreferrer"
                    class="w-full flex items-center justify-center gap-2 px-4 py-2.5 rounded-xl bg-[#EA580C] hover:bg-[#C2410C] text-white text-xs font-semibold shadow-md"
                >
                    <span>Konsultasi Gratis via WhatsApp</span>
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</header>
