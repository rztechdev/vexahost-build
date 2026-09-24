@php
    $services = [
        [
            'eyebrow'  => 'Membangun Reputasi',
            'title'    => 'Company Profile',
            'short'    => 'Company Profile',
            'popular'  => true,
            'icon'     => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>',
            'desc'     => 'Profil usaha lengkap yang membangun kepercayaan pelanggan. Memuat cerita bisnis, galeri produk, portofolio, dan alamat terhubung Google Maps.',
            'features' => ['5 Halaman Lengkap Terstruktur', 'SEO Google Dasar', 'Pendampingan WA 2 Minggu'],
            'cta'      => 'Pilih Paket Terfavorit Ini',
        ],
        [
            'eyebrow'  => 'Fast & Convert',
            'title'    => 'Landing Page',
            'short'    => 'Landing Page',
            'popular'  => false,
            'icon'     => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>',
            'desc'     => 'Satu halaman fokus untuk promosi cepat produk atau jasa spesifik dan iklan media sosial. Ringan, cepat dibuka, langsung mengarah ke aksi.',
            'features' => ['Single-page fokus', 'Tombol langsung ke WhatsApp', 'Cocok untuk iklan medsos'],
            'cta'      => 'Lihat Paket',
        ],
        [
            'eyebrow'  => 'Jualan & Kasir POS',
            'title'    => 'Toko & Kasir',
            'short'    => 'Toko & Kasir',
            'popular'  => false,
            'icon'     => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>',
            'desc'     => 'Website jualan 24 jam plus sistem kasir web untuk mencatat transaksi toko dan mencetak struk. Cocok untuk usaha yang mulai berkembang.',
            'features' => ['Katalog produk & Kasir POS Web', 'Cetak struk & rekap omzet', 'Kelola stok sederhana'],
            'cta'      => 'Lihat Paket',
        ],
    ];
@endphp

<section id="layanan" class="relative py-14 sm:py-24 bg-white dark:bg-zinc-950 text-[#2E2E2A] dark:text-zinc-100 overflow-hidden transition-colors duration-300">
    <!-- Grid Pattern Overlay -->
    <div class="absolute inset-0 bg-grid-pattern pointer-events-none"></div>

    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

        <!-- Section Header -->
        <div class="vh-reveal-up max-w-3xl mb-8 sm:mb-12">
            <h2 class="font-fraunces text-2xl sm:text-3xl font-extrabold text-[#2E2E2A] dark:text-zinc-50 tracking-tight leading-tight">
                Layanan Pembuatan Website
            </h2>
            <p class="text-xs sm:text-sm text-[#595952] dark:text-zinc-400 mt-2 max-w-xl leading-relaxed">
                Kami menyediakan jenis website yang dirancang khusus untuk kebutuhan UMKM — praktis, cepat selesai, dan langsung menghasilkan.
            </p>
        </div>

        <div x-data="{ tab: 0 }" class="vh-reveal-up">

            <!-- MOBILE: tab garis-bawah (tanpa scroll) -->
            <div class="lg:hidden grid grid-cols-3 border-b border-zinc-200 dark:border-zinc-800 mb-7">
                @foreach($services as $i => $s)
                    <button type="button" @click="tab = {{ $i }}"
                        class="relative -mb-px py-3 px-1 text-center transition-colors duration-200"
                        :class="tab === {{ $i }} ? 'text-[#EA580C] dark:text-[#FB923C]' : 'text-[#595952] dark:text-zinc-500'">
                        <span class="block font-fraunces text-[12px] font-bold leading-tight">{{ $s['short'] }}</span>
                        <span class="absolute bottom-0 left-0 right-0 h-0.5 rounded-full bg-[#EA580C] transition-all duration-200"
                              :class="tab === {{ $i }} ? 'opacity-100 scale-x-100' : 'opacity-0 scale-x-50'"></span>
                    </button>
                @endforeach
            </div>

            <div class="lg:grid lg:grid-cols-12 lg:gap-12">

                <!-- DESKTOP: sidebar daftar (garis pemisah + aksen kiri, tanpa box) -->
                <div class="hidden lg:block lg:col-span-4 lg:border-r border-zinc-200 dark:border-zinc-800 lg:pr-6 lg:-ml-4">
                    @foreach($services as $i => $s)
                        <button type="button" @click="tab = {{ $i }}"
                            class="group w-full text-left flex items-center gap-3.5 py-4 pl-4 pr-2 relative transition-colors duration-200
                                   {{ !$loop->last ? 'border-b border-zinc-100 dark:border-zinc-800/60' : '' }}">
                            <!-- Aksen kiri aktif -->
                            <span class="absolute left-0 top-1/2 -translate-y-1/2 w-0.5 rounded-r-full bg-[#EA580C] transition-all duration-300"
                                  :class="tab === {{ $i }} ? 'h-10 opacity-100' : 'h-0 opacity-0'"></span>

                            <svg class="w-5 h-5 shrink-0 transition-colors duration-200"
                                 :class="tab === {{ $i }} ? 'text-[#EA580C] dark:text-[#FB923C]' : 'text-zinc-400 dark:text-zinc-600 group-hover:text-[#EA580C]'"
                                 fill="none" viewBox="0 0 24 24" stroke="currentColor">{!! $s['icon'] !!}</svg>

                            <span class="min-w-0 flex-1">
                                <span class="font-mono text-[10px] font-bold uppercase tracking-wider block transition-colors duration-200"
                                      :class="tab === {{ $i }} ? 'text-[#EA580C] dark:text-[#FB923C]' : 'text-zinc-400 dark:text-zinc-600'">{{ $s['eyebrow'] }}</span>
                                <span class="font-fraunces text-base font-bold block leading-tight mt-0.5 transition-colors duration-200"
                                      :class="tab === {{ $i }} ? 'text-[#2E2E2A] dark:text-zinc-50' : 'text-[#595952] dark:text-zinc-400 group-hover:text-[#2E2E2A] dark:group-hover:text-zinc-200'">{{ $s['short'] }}</span>
                            </span>

                            @if($s['popular'])
                                <svg class="shrink-0 w-3.5 h-3.5 text-[#EA580C] dark:text-[#FB923C]" fill="currentColor" viewBox="0 0 20 20" title="Paling Populer"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.958a1 1 0 00.95.69h4.162c.969 0 1.371 1.24.588 1.81l-3.367 2.446a1 1 0 00-.364 1.118l1.286 3.958c.3.922-.755 1.688-1.54 1.118l-3.366-2.446a1 1 0 00-1.175 0l-3.366 2.446c-.784.57-1.838-.196-1.539-1.118l1.286-3.958a1 1 0 00-.363-1.118L2.98 9.385c-.783-.57-.38-1.81.588-1.81h4.161a1 1 0 00.951-.69l1.286-3.958z"/></svg>
                            @endif
                        </button>
                    @endforeach
                </div>

                <!-- Konten detail (terbuka, tanpa box) -->
                <div class="lg:col-span-8 lg:pl-2">
                    @foreach($services as $i => $s)
                        <div x-show="tab === {{ $i }}"
                             class="vh-svc-panel"
                             @if(!$loop->first) style="display:none" @endif>

                            <div class="flex items-center gap-4 mb-6">
                                <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-2xl bg-[#EA580C]/12 dark:bg-[#EA580C]/15 text-[#EA580C] dark:text-[#FB923C] flex items-center justify-center shrink-0">
                                    <svg class="w-6 h-6 sm:w-7 sm:h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">{!! $s['icon'] !!}</svg>
                                </div>
                                <div>
                                    <span class="font-mono text-[11px] font-bold text-[#EA580C] dark:text-[#FB923C] uppercase tracking-wider block">{{ $s['eyebrow'] }}</span>
                                    <h3 class="font-fraunces text-2xl sm:text-3xl font-extrabold text-[#2E2E2A] dark:text-zinc-50 leading-tight flex items-center gap-2.5">
                                        {{ $s['title'] }}
                                        @if($s['popular'])
                                            <span class="inline-flex items-center gap-1 text-[10px] font-mono font-bold text-[#EA580C] dark:text-[#FB923C] bg-[#EA580C]/12 px-2 py-0.5 rounded-full uppercase tracking-wide"><svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.958a1 1 0 00.95.69h4.162c.969 0 1.371 1.24.588 1.81l-3.367 2.446a1 1 0 00-.364 1.118l1.286 3.958c.3.922-.755 1.688-1.54 1.118l-3.366-2.446a1 1 0 00-1.175 0l-3.366 2.446c-.784.57-1.838-.196-1.539-1.118l1.286-3.958a1 1 0 00-.363-1.118L2.98 9.385c-.783-.57-.38-1.81.588-1.81h4.161a1 1 0 00.951-.69l1.286-3.958z"/></svg>Populer</span>
                                        @endif
                                    </h3>
                                </div>
                            </div>

                            <p class="text-sm sm:text-[15px] text-[#595952] dark:text-zinc-400 leading-relaxed max-w-lg">
                                {{ $s['desc'] }}
                            </p>

                            <ul class="grid sm:grid-cols-2 gap-x-6 gap-y-3 mt-6 pt-6 border-t border-zinc-200 dark:border-zinc-800 max-w-lg">
                                @foreach($s['features'] as $f)
                                    <li class="flex items-center gap-2.5 text-sm text-[#2E2E2A] dark:text-zinc-200 font-medium">
                                        <svg class="w-4 h-4 text-[#EA580C] dark:text-[#FB923C] shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                        </svg>
                                        <span>{{ $f }}</span>
                                    </li>
                                @endforeach
                            </ul>

                            <div class="mt-8">
                                <a href="#paket-harga"
                                   class="inline-flex items-center justify-center gap-2 px-6 py-3 rounded-xl bg-[#EA580C] hover:bg-[#C2410C] text-white font-bold text-sm shadow-md hover:shadow-lg transition-all duration-200 active:scale-95 vh-focus-ring">
                                    {{ $s['cta'] }}
                                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5-5 5M5 12h13"/></svg>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</section>

<style>
    @keyframes vh-svc-in {
        from { opacity: 0; transform: translateY(6px); }
        to   { opacity: 1; transform: none; }
    }
    #layanan .vh-svc-panel { animation: vh-svc-in 0.25s ease both; }
</style>
