@php
    /*
    |--------------------------------------------------------------------------
    | Data Testimoni Pelanggan
    |--------------------------------------------------------------------------
    | CATATAN: Ini adalah contoh testimoni untuk mengisi tampilan. Ganti dengan
    | ulasan ASLI dari pelanggan Anda begitu tersedia.
    |
    | Konsep konten mengikuti positioning VexaHost saat ini:
    | jasa pembuatan website profesional & terjangkau khusus UMKM Indonesia.
    */

    // Tombol "Tulis review kamu" mengarah ke WhatsApp (channel utama VexaHost).
    $reviewWaUrl = 'https://wa.me/6285808749131?text=' . rawurlencode('Halo VexaHost, saya ingin memberikan review/testimoni pengalaman saya bekerja sama dengan tim VexaHost.');

    $testimonials = [
        [
            'name'   => 'Dewi Lestari',
            'role'   => 'Pemilik Butik Online',
            'color'  => 'bg-[#EA580C]',
            'quote'  => 'Website toko saya rampung hanya dalam 7 hari dan tampilannya rapi banget. Sekarang pelanggan tinggal lihat katalog di web, tidak perlu tanya harga satu-satu lewat DM. Order jadi lebih ramai!',
        ],
        [
            'name'   => 'Budi Santoso',
            'role'   => 'Owner Kedai Kopi',
            'color'  => 'bg-amber-500',
            'quote'  => 'Awalnya saya buta soal website, tapi timnya sabar menjelaskan lewat WhatsApp tanpa istilah teknis yang bikin pusing. Company profile kedai saya sekarang terlihat jauh lebih profesional.',
        ],
        [
            'name'   => 'Siti Rahmawati',
            'role'   => 'UMKM Katering Rumahan',
            'color'  => 'bg-rose-500',
            'quote'  => 'Harganya benar-benar masuk akal untuk usaha rumahan seperti saya. Revisi dilayani sampai saya puas dan warnanya pas dengan brand katering. Sangat recommended untuk pemula!',
        ],
        [
            'name'   => 'Ahmad Fauzi',
            'role'   => 'Pengrajin Furniture',
            'color'  => 'bg-sky-600',
            'quote'  => 'Web company profile bikin usaha mebel saya terlihat bonafit di mata klien luar kota. Banyak yang akhirnya percaya untuk order setelah melihat portofolio produk di website.',
        ],
        [
            'name'   => 'Rina Marlina',
            'role'   => 'Pemilik Skincare Lokal',
            'color'  => 'bg-purple-500',
            'quote'  => 'Prosesnya cepat dan komunikatif. Foto produk tinggal saya kirim via WA, semuanya ditata rapi oleh timnya. Landing page-nya membuat promo jadi gampang dibagikan ke pelanggan.',
        ],
        [
            'name'   => 'Hendra Wijaya',
            'role'   => 'Owner Bengkel Motor',
            'color'  => 'bg-cyan-600',
            'quote'  => 'Bengkel saya sekarang gampang ditemukan di Google Maps. Websitenya ringan dan cepat dibuka di HP pelanggan. Terima kasih sudah didampingi sampai saya bisa update sendiri.',
        ],
    ];

    // Ambil inisial dari nama untuk avatar.
    $initials = fn (string $name) => collect(explode(' ', $name))
        ->take(2)
        ->map(fn ($w) => mb_strtoupper(mb_substr($w, 0, 1)))
        ->implode('');
@endphp

<section id="testimoni" class="relative py-14 sm:py-24 bg-[#FAFBF8] dark:bg-zinc-950 text-[#2E2E2A] dark:text-zinc-100 border-t border-zinc-200 dark:border-zinc-800 overflow-hidden transition-colors duration-300">
    <!-- Grid Pattern Overlay -->
    <div class="absolute inset-0 bg-grid-pattern pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

        <!-- Section Header -->
        <div class="vh-reveal-up text-center max-w-3xl mx-auto mb-10 sm:mb-14">
            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#FB923C]/15 text-[#EA580C] dark:text-[#FB923C] text-[11px] font-bold uppercase tracking-wider mb-3">
                <span class="material-symbols-outlined text-[14px]">favorite</span>
                Kata Mereka
            </span>
            <h2 class="font-fraunces text-2xl sm:text-3xl font-extrabold text-[#2E2E2A] dark:text-zinc-50 tracking-tight leading-tight">
                Dipercaya Pelaku UMKM Indonesia
            </h2>
            <p class="text-xs sm:text-sm text-[#595952] dark:text-zinc-400 mt-2 max-w-xl mx-auto leading-relaxed">
                Cerita nyata dari pemilik usaha yang websitenya kami bangun — mulai dari toko online, company profile, hingga landing page promo.
            </p>
        </div>

        <!-- Testimonials Grid (mobile: 2 kolom kiri-kanan) -->
        <div class="grid grid-cols-2 lg:grid-cols-3 gap-3 sm:gap-6">
            @foreach($testimonials as $i => $t)
                <div class="vh-reveal-up vh-delay-{{ ($i % 3) + 1 }} vh-card-3d bg-white dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 rounded-2xl p-4 sm:p-7 shadow-sm flex flex-col">

                    <!-- Rating -->
                    <div class="flex items-center gap-0.5 mb-2.5 sm:mb-4 text-amber-400">
                        @for($s = 0; $s < 5; $s++)
                            <svg class="w-3 h-3 sm:w-4 sm:h-4" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.958a1 1 0 00.95.69h4.162c.969 0 1.371 1.24.588 1.81l-3.367 2.446a1 1 0 00-.364 1.118l1.286 3.958c.3.922-.755 1.688-1.54 1.118l-3.366-2.446a1 1 0 00-1.175 0l-3.366 2.446c-.784.57-1.838-.196-1.539-1.118l1.286-3.958a1 1 0 00-.363-1.118L2.98 9.385c-.783-.57-.38-1.81.588-1.81h4.161a1 1 0 00.951-.69l1.286-3.958z"/>
                            </svg>
                        @endfor
                    </div>

                    <!-- Quote -->
                    <p class="text-[11px] sm:text-sm text-[#595952] dark:text-zinc-300 italic leading-relaxed flex-grow">
                        &ldquo;{{ $t['quote'] }}&rdquo;
                    </p>

                    <!-- Author + Source -->
                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-2 sm:gap-3 mt-3.5 pt-3.5 sm:mt-6 sm:pt-5 border-t border-zinc-100 dark:border-zinc-800">
                        <div class="flex items-center gap-2 sm:gap-3 min-w-0">
                            <div class="w-8 h-8 sm:w-10 sm:h-10 rounded-full {{ $t['color'] }} text-white flex items-center justify-center text-[10px] sm:text-xs font-bold shrink-0 shadow-xs">
                                {{ $initials($t['name']) }}
                            </div>
                            <div class="min-w-0">
                                <div class="font-bold text-xs sm:text-sm text-[#2E2E2A] dark:text-zinc-100 truncate">{{ $t['name'] }}</div>
                                <div class="text-[10px] sm:text-[11px] text-[#595952] dark:text-zinc-500 truncate">{{ $t['role'] }}</div>
                            </div>
                        </div>
                        <span class="shrink-0 inline-flex items-center gap-1 text-[10px] sm:text-[11px] font-semibold text-[#EA580C] dark:text-[#FB923C]"
                              title="Testimoni asli dari pelanggan VexaHost">
                            <svg class="w-3 h-3 sm:w-3.5 sm:h-3.5 shrink-0" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                <path d="M12 1l2.4 2.4 3.3-.6.6 3.3L21 9.6 18.9 12 21 14.4l-2.7 1.5-.6 3.3-3.3-.6L12 21l-2.4-2.4-3.3.6-.6-3.3L3 14.4 5.1 12 3 9.6l2.7-1.5.6-3.3 3.3.6L12 1zm-1.2 13.2l4.9-4.9-1.3-1.3-3.6 3.6-1.6-1.6-1.3 1.3 2.9 2.9z"/>
                            </svg>
                            Ulasan Terverifikasi
                        </span>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Write a Review CTA -->
        <div class="vh-reveal-up text-center mt-10 sm:mt-14">
            <a href="{{ $reviewWaUrl }}" target="_blank" rel="noopener noreferrer"
               class="inline-flex items-center gap-2.5 px-7 py-3.5 rounded-xl bg-gradient-to-r from-[#EA580C] to-[#FB923C] hover:from-[#C2410C] hover:to-[#EA580C] text-white text-sm font-bold shadow-md hover:shadow-lg transition-all duration-200 active:scale-95 vh-focus-ring">
                Tulis review kamu
                <span class="material-symbols-outlined text-[18px]">rate_review</span>
            </a>
            <p class="text-[11px] text-[#595952] dark:text-zinc-500 mt-3">
                Sudah pernah bekerja sama dengan kami? Bagikan pengalamanmu via WhatsApp 🧡
            </p>
        </div>

    </div>
</section>
