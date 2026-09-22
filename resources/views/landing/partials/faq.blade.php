<section id="faq" class="relative py-20 sm:py-28 bg-white dark:bg-zinc-950 text-[#2E2E2A] dark:text-zinc-100 overflow-hidden transition-colors duration-300" x-data="{ active: 1 }">
    <!-- Grid Pattern Overlay -->
    <div class="absolute inset-0 bg-grid-pattern pointer-events-none"></div>

    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <!-- Section Header -->
        <div class="rz-reveal-up text-center max-w-3xl mx-auto mb-10 sm:mb-14">
            <h2 class="font-fraunces text-2xl sm:text-3xl font-extrabold text-[#2E2E2A] dark:text-zinc-50 tracking-tight leading-tight">
                Pertanyaan yang Sering Diajukan
            </h2>
            <p class="text-xs sm:text-sm text-[#595952] dark:text-zinc-400 mt-2 max-w-xl mx-auto leading-relaxed">
                Kami paham banyak kekhawatiran seputar budget, teknis, dan pengelolaan website. Berikut penjelasan transparan kami:
            </p>
        </div>

        <!-- Accordion List with Staggered Scroll Animations -->
        <div class="space-y-3 sm:space-y-4">
            
            <!-- Item 1 -->
            <div class="rz-reveal-up rz-delay-1 bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 rounded-2xl overflow-hidden shadow-2xs hover:border-[#EA580C]/50 transition-all duration-200">
                <button 
                    @click="active = (active === 1 ? null : 1)"
                    class="w-full px-5 py-4 text-left flex items-center justify-between gap-4 focus:outline-none focus-visible:ring-2 focus-visible:ring-[#EA580C] rz-focus-ring"
                    :aria-expanded="active === 1"
                >
                    <span class="font-fraunces text-sm sm:text-base font-semibold text-[#2E2E2A] dark:text-zinc-100">
                        Apakah bisa bayar bertahap atau dicicil?
                    </span>
                    <span class="w-7 h-7 rounded-full flex items-center justify-center shrink-0 transition-transform duration-300" :class="active === 1 ? 'rotate-180 bg-[#EA580C] text-white' : 'bg-zinc-100 dark:bg-zinc-800 text-[#2E2E2A] dark:text-zinc-300'">
                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </span>
                </button>
                <div 
                    x-show="active === 1" 
                    x-cloak 
                    x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 -translate-y-2"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    class="px-5 pb-5 text-xs sm:text-sm text-[#595952] dark:text-zinc-400 leading-relaxed border-t border-zinc-100 dark:border-zinc-800/80 pt-3"
                >
                    <strong class="text-[#2E2E2A] dark:text-zinc-200">Tentu bisa!</strong> Skema standar kami adalah DP 50% di awal pengerjaan untuk riset dan desain draft, dan pelunasan 50% setelah website selesai di-review dan siap online. Jika butuh skema termin khusus, silakan diskusikan bersama kami.
                </div>
            </div>

            <!-- Item 2 -->
            <div class="rz-reveal-up rz-delay-2 bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 rounded-2xl overflow-hidden shadow-2xs hover:border-[#EA580C]/50 transition-all duration-200">
                <button 
                    @click="active = (active === 2 ? null : 2)"
                    class="w-full px-5 py-4 text-left flex items-center justify-between gap-4 focus:outline-none focus-visible:ring-2 focus-visible:ring-[#EA580C] rz-focus-ring"
                    :aria-expanded="active === 2"
                >
                    <span class="font-fraunces text-sm sm:text-base font-semibold text-[#2E2E2A] dark:text-zinc-100">
                        Berapa lama proses pengerjaan website?
                    </span>
                    <span class="w-7 h-7 rounded-full flex items-center justify-center shrink-0 transition-transform duration-300" :class="active === 2 ? 'rotate-180 bg-[#EA580C] text-white' : 'bg-zinc-100 dark:bg-zinc-800 text-[#2E2E2A] dark:text-zinc-300'">
                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </span>
                </button>
                <div 
                    x-show="active === 2" 
                    x-cloak 
                    x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 -translate-y-2"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    class="px-5 pb-5 text-xs sm:text-sm text-[#595952] dark:text-zinc-400 leading-relaxed border-t border-zinc-100 dark:border-zinc-800/80 pt-3"
                >
                    Rata-rata pengerjaan berkisar antara <strong class="text-[#2E2E2A] dark:text-zinc-200">2 hingga 6 hari kerja</strong> tergantung kelengkapan materi Anda. Untuk Landing Page sederhana, pengerjaan bahkan bisa selesai dalam 2-3 hari kerja.
                </div>
            </div>

            <!-- Item 3 -->
            <div class="rz-reveal-up rz-delay-3 bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 rounded-2xl overflow-hidden shadow-2xs hover:border-[#EA580C]/50 transition-all duration-200">
                <button 
                    @click="active = (active === 3 ? null : 3)"
                    class="w-full px-5 py-4 text-left flex items-center justify-between gap-4 focus:outline-none focus-visible:ring-2 focus-visible:ring-[#EA580C] rz-focus-ring"
                    :aria-expanded="active === 3"
                >
                    <span class="font-fraunces text-sm sm:text-base font-semibold text-[#2E2E2A] dark:text-zinc-100">
                        Apakah saya perlu paham teknis untuk mengelola website nanti?
                    </span>
                    <span class="w-7 h-7 rounded-full flex items-center justify-center shrink-0 transition-transform duration-300" :class="active === 3 ? 'rotate-180 bg-[#EA580C] text-white' : 'bg-zinc-100 dark:bg-zinc-800 text-[#2E2E2A] dark:text-zinc-300'">
                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </span>
                </button>
                <div 
                    x-show="active === 3" 
                    x-cloak 
                    x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 -translate-y-2"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    class="px-5 pb-5 text-xs sm:text-sm text-[#595952] dark:text-zinc-400 leading-relaxed border-t border-zinc-100 dark:border-zinc-800/80 pt-3"
                >
                    <strong class="text-[#2E2E2A] dark:text-zinc-200">Sama sekali tidak perlu!</strong> Kami merancang website yang sangat mudah dikelola. Jika Anda ingin mengganti nomor WA, menambah menu, atau mengubah promo, Anda cukup chat kami atau kami sediakan tutorial singkat semudah mengedit status WhatsApp.
                </div>
            </div>

            <!-- Item 4 -->
            <div class="rz-reveal-up rz-delay-4 bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 rounded-2xl overflow-hidden shadow-2xs hover:border-[#EA580C]/50 transition-all duration-200">
                <button 
                    @click="active = (active === 4 ? null : 4)"
                    class="w-full px-5 py-4 text-left flex items-center justify-between gap-4 focus:outline-none focus-visible:ring-2 focus-visible:ring-[#EA580C] rz-focus-ring"
                    :aria-expanded="active === 4"
                >
                    <span class="font-fraunces text-sm sm:text-base font-semibold text-[#2E2E2A] dark:text-zinc-100">
                        Bagaimana kalau saya belum yakin apakah usaha saya butuh website?
                    </span>
                    <span class="w-7 h-7 rounded-full flex items-center justify-center shrink-0 transition-transform duration-300" :class="active === 4 ? 'rotate-180 bg-[#EA580C] text-white' : 'bg-zinc-100 dark:bg-zinc-800 text-[#2E2E2A] dark:text-zinc-300'">
                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </span>
                </button>
                <div 
                    x-show="active === 4" 
                    x-cloak 
                    x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 -translate-y-2"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    class="px-5 pb-5 text-xs sm:text-sm text-[#595952] dark:text-zinc-400 leading-relaxed border-t border-zinc-100 dark:border-zinc-800/80 pt-3"
                >
                    Yuk, ngobrol dulu via WhatsApp! Konsultasi 100% gratis tanpa paksaan beli. Kami akan bantu analisa apakah usaha Anda saat ini memang sudah waktunya membuat website atau cukup mengoptimalkan saluran gratisan dulu.
                </div>
            </div>

            <!-- Item 5 -->
            <div class="rz-reveal-up rz-delay-5 bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 rounded-2xl overflow-hidden shadow-2xs hover:border-[#EA580C]/50 transition-all duration-200">
                <button 
                    @click="active = (active === 5 ? null : 5)"
                    class="w-full px-5 py-4 text-left flex items-center justify-between gap-4 focus:outline-none focus-visible:ring-2 focus-visible:ring-[#EA580C] rz-focus-ring"
                    :aria-expanded="active === 5"
                >
                    <span class="font-fraunces text-sm sm:text-base font-semibold text-[#2E2E2A] dark:text-zinc-100">
                        Apakah ada biaya bulanan setelah website jadi?
                    </span>
                    <span class="w-7 h-7 rounded-full flex items-center justify-center shrink-0 transition-transform duration-300" :class="active === 5 ? 'rotate-180 bg-[#EA580C] text-white' : 'bg-zinc-100 dark:bg-zinc-800 text-[#2E2E2A] dark:text-zinc-300'">
                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </span>
                </button>
                <div 
                    x-show="active === 5" 
                    x-cloak 
                    x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 -translate-y-2"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    class="px-5 pb-5 text-xs sm:text-sm text-[#595952] dark:text-zinc-400 leading-relaxed border-t border-zinc-100 dark:border-zinc-800/80 pt-3"
                >
                    <strong class="text-[#2E2E2A] dark:text-zinc-200">Tidak ada biaya bulanan wajib dari kami.</strong> Biaya pembuatan website dibayar sekali di awal. Anda hanya perlu memperpanjang sewa nama Domain (.com/.id) dan Cloud Server secara tahunan yang biayanya sangat terjangkau (rata-rata mulai Rp300rb - Rp600rb per tahun).
                </div>
            </div>

        </div>

    </div>
</section>
