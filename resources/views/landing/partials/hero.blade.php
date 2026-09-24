<section id="hero" class="relative pt-20 sm:pt-28 lg:pt-0 pb-0 min-h-screen min-h-[100dvh] lg:min-h-[780px] xl:min-h-[820px] 2xl:min-h-[860px] bg-white dark:bg-zinc-950 text-[#2E2E2A] dark:text-zinc-100 overflow-hidden flex flex-col justify-between lg:justify-center lg:flex-row lg:items-center transition-colors duration-300">
    <!-- Grid Pattern Overlay -->
    <div class="absolute inset-0 bg-grid-pattern pointer-events-none opacity-60"></div>

    <!-- Desktop Full-Width Cosmic Canvas Layer (Astronomer fully visible, telescope entering cosmos, moon visible) -->
    <div class="hidden lg:block absolute inset-0 w-full h-full pointer-events-none select-none z-0 overflow-hidden">
        @include('landing.partials.hero-cosmic')
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full flex-1 flex flex-col justify-between lg:justify-center">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center flex-1 flex flex-col justify-between lg:grid">
            
            <!-- Left Column: Copy & CTAs -->
            <div class="lg:col-span-7 xl:col-span-7 flex flex-col items-start text-left pt-2 pb-0 sm:pt-4 sm:pb-0 lg:pt-32 lg:pb-20 xl:pt-40 xl:pb-24 w-full max-w-2xl lg:max-w-[620px] xl:max-w-3xl 2xl:max-w-4xl">
                <!-- Main Headline (efek mengetik / typewriter + kursor - ukuran besar & tebal megah) -->
                <h1 id="vh-typewriter" class="relative font-fraunces text-[42px] sm:text-[54px] lg:text-[56px] xl:text-[66px] 2xl:text-[74px] font-black text-[#2E2E2A] dark:text-zinc-50 leading-[1.08] sm:leading-[1.05] lg:leading-[1.03] tracking-tight mt-2 sm:mt-4 mb-6 w-full max-w-2xl lg:max-w-[620px] xl:max-w-3xl 2xl:max-w-4xl">Bikin Usaha Anda Lebih Dipercaya, <span class="text-[#EA580C] dark:text-[#FB923C]">Lewat Website Profesional.</span></h1>
                <script>
                    (function () {
                        var h = document.getElementById('vh-typewriter');
                        var hero = document.getElementById('hero');
                        if (!h || !hero) return;
                        if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return; // biarkan statis

                        // Ambil segmen (teks biasa + segmen highlight) dari isi asli
                        var segments = [];
                        h.childNodes.forEach(function (node) {
                            if (node.nodeType === 3) segments.push({ text: node.textContent, cls: '' });
                            else if (node.nodeType === 1) segments.push({ text: node.textContent, cls: node.getAttribute('class') || '' });
                        });

                        hero.classList.add('vh-typing'); // sembunyikan elemen bawah selama mengetik
                        h.textContent = '';

                        var chars = [];
                        segments.forEach(function (seg) {
                            seg.text.split(/(\s+)/).forEach(function (part) {
                                if (part === '') return;
                                if (/^\s+$/.test(part)) {
                                    var sp = document.createElement('span');
                                    sp.className = 'tw-char'; sp.dataset.space = '1';
                                    sp.innerHTML = '&nbsp;'; sp.style.opacity = '0';
                                    h.appendChild(sp); chars.push(sp);
                                } else {
                                    var word = document.createElement('span');
                                    word.style.whiteSpace = 'nowrap'; word.style.display = 'inline-block';
                                    if (seg.cls) word.className = seg.cls;
                                    for (var i = 0; i < part.length; i++) {
                                        var c = document.createElement('span');
                                        c.className = 'tw-char'; c.textContent = part[i]; c.style.opacity = '0';
                                        word.appendChild(c); chars.push(c);
                                    }
                                    h.appendChild(word);
                                }
                            });
                        });

                        var cursor = document.createElement('span');
                        cursor.className = 'tw-cursor';
                        h.appendChild(cursor);

                        function moveCursor(el) {
                            var hr = h.getBoundingClientRect(), r = el.getBoundingClientRect();
                            cursor.style.left = (r.right - hr.left) + 'px';
                            cursor.style.top = (r.top - hr.top) + 'px';
                            cursor.style.height = r.height + 'px';
                        }

                        var idx = 0;
                        function type() {
                            if (idx >= chars.length) {
                                hero.classList.remove('vh-typing');
                                hero.classList.add('vh-typed-done'); // munculkan elemen bawah
                                setTimeout(function () { cursor.classList.add('tw-cursor-hide'); }, 1600);
                                return;
                            }
                            var c = chars[idx];
                            c.style.opacity = '1';
                            moveCursor(c);
                            idx++;
                            setTimeout(type, c.dataset.space ? 28 : 45);
                        }

                        setTimeout(type, 350);

                        // Pengaman: bila mengetik gagal/menggantung, tampilkan semua teks & elemen bawah.
                        setTimeout(function () {
                            if (!hero.classList.contains('vh-typed-done')) {
                                chars.forEach(function (c) { c.style.opacity = '1'; });
                                cursor.classList.add('tw-cursor-hide');
                                hero.classList.remove('vh-typing');
                                hero.classList.add('vh-typed-done');
                            }
                        }, 6000);
                    })();
                </script>

                <!-- Subheadline (muncul setelah headline selesai) -->
                <p class="vh-after-stream text-base sm:text-lg lg:text-xl text-[#595952] dark:text-zinc-400 font-normal leading-relaxed w-full max-w-xl lg:max-w-[480px] xl:max-w-xl mb-8">
                    Tampil lebih dipercaya di internet. Desain modern, proses cepat, tanpa istilah teknis yang bikin pusing.
                </p>

                <!-- Dual CTA Buttons -->
                <div class="vh-after-stream flex flex-col sm:flex-row items-stretch sm:items-center gap-3.5 w-full sm:w-auto" style="animation-delay: 0.15s">
                    <a 
                        href="https://wa.me/6285808749131?text=Halo%20VexaHost,%20saya%20ingin%20konsultasi%20pembuatan%20website%20untuk%20usaha%20saya."
                        target="_blank"
                        rel="noopener noreferrer"
                        class="inline-flex items-center justify-center gap-2.5 px-6 py-3.5 rounded-xl bg-[#EA580C] hover:bg-[#C2410C] text-white text-xs sm:text-sm font-bold shadow-md shadow-[#EA580C]/20 hover:shadow-lg transition-all duration-200 active:scale-95 group vh-focus-ring"
                    >
                        <!-- WhatsApp Icon -->
                        <svg class="w-4.5 h-4.5 fill-current group-hover:scale-110 transition-transform" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                        <span>Konsultasi Gratis via WhatsApp</span>
                    </a>

                    <a 
                        href="#paket-harga"
                        class="inline-flex items-center justify-center gap-2 px-5 py-3.5 rounded-xl bg-white dark:bg-zinc-900 hover:bg-zinc-50 dark:hover:bg-zinc-800 text-[#2E2E2A] dark:text-zinc-100 border border-zinc-300 dark:border-zinc-700 text-xs sm:text-sm font-semibold shadow-xs transition-all duration-200 active:scale-95 vh-focus-ring"
                    >
                        <span>Lihat Paket Harga</span>
                        <svg class="w-4 h-4 text-[#EA580C] dark:text-[#FB923C]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Right Column Grid Spacer on Desktop (allows full-bleed cosmic illustration behind to shine) -->
            <div class="hidden lg:block lg:col-span-5 xl:col-span-5 pointer-events-none select-none">
            </div>

        </div>
    </div>

    <!-- Mobile Cosmic Wave Stage (< lg: Astronom, Teleskop, dan Antariksa Tampil Kaya & Penuh di Bawah Tombol) -->
    <div class="lg:hidden w-full relative z-10 select-none pointer-events-none flex-1 min-h-[300px] max-h-[460px] flex items-end overflow-hidden">
        @include('landing.partials.hero-cosmic-mobile')
    </div>
</section>

<style>
    @keyframes vh-word-in { from { opacity: 0; transform: translateY(0.35em); } to { opacity: 1; transform: none; } }
    @keyframes tw-blink { 0%, 49% { opacity: 1; } 50%, 100% { opacity: 0; } }

    /* Kursor "garis" mengetik */
    #hero .tw-cursor {
        position: absolute;
        width: 3.5px;
        background: #EA580C;
        border-radius: 2px;
        left: 0; top: 0;
        animation: tw-blink 1s steps(1) infinite;
        pointer-events: none;
    }
    #hero .tw-cursor-hide { opacity: 0 !important; animation: none; transition: opacity 0.3s; }

    /* Elemen bawah disembunyikan selama mengetik, muncul setelah selesai */
    #hero.vh-typing .vh-after-stream { opacity: 0; }
    #hero.vh-typed-done .vh-after-stream {
        opacity: 0;
        animation: vh-word-in 0.5s ease forwards;
    }

    /* Cosmic visual gentle float */
    @keyframes cosmic-float {
        0%, 100% { transform: translateY(0px) rotate(0deg); }
        50% { transform: translateY(-7px) rotate(0.8deg); }
    }
    .animate-cosmic-float {
        animation: cosmic-float 7s ease-in-out infinite;
    }
</style>
