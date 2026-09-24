<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- SEO: title, description, canonical, Open Graph, Twitter, JSON-LD -->
    @include('landing.partials.meta')

    <!-- Google Fonts: Inter, JetBrains Mono, Material Symbols Outlined -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&family=JetBrains+Mono:ital,wght@0,400;0,500;0,600;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">

    <!-- Early theme check to prevent FOUC -->
    <script>
        if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>

    <!-- Styles & Scripts via Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        /* Typography overrides */
        .font-fraunces {
            font-family: 'Inter', sans-serif;
        }
        .font-mono {
            font-family: 'JetBrains Mono', monospace;
        }
        body {
            font-family: 'Inter', sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
    </style>
</head>
<body x-data="themeHandler" class="bg-white dark:bg-zinc-950 text-[#2E2E2A] dark:text-zinc-100 antialiased selection:bg-[#F97316] selection:text-white min-h-screen flex flex-col relative overflow-x-hidden transition-colors duration-300">

    <!-- Decorative Clean Grid Pattern -->
    <div class="fixed inset-0 bg-grid-pattern pointer-events-none z-0"></div>

    <!-- 1. Navbar -->
    @include('landing.partials.navbar')

    <!-- Main One-Page Content Flow -->
    <main class="flex-grow">
        <!-- 2. Hero Section -->
        @include('landing.partials.hero')

        <!-- 3. Problem/Agitate Section -->
        @include('landing.partials.problem')

        <!-- 4. Layanan Section -->
        @include('landing.partials.services')

        <!-- 5. Proses Kerja Section -->
        @include('landing.partials.process')

        <!-- 6. Kenapa Pilih Kami Section -->
        @include('landing.partials.why-us')

        <!-- 6b. Testimoni Pelanggan Section -->
        @include('landing.partials.testimonials')

        <!-- 7. Paket & Harga Section -->
        @include('landing.partials.pricing')

        <!-- 8. FAQ Section -->
        @include('landing.partials.faq')

        <!-- 8b. Payment Methods Marquee (di bawah FAQ) -->
        @include('landing.partials.payments')

        <!-- 10. Final CTA Section -->
        @include('landing.partials.cta')
    </main>

    <!-- 11. Footer -->
    @include('landing.partials.footer')

    <!-- Floating WhatsApp Action Button -->
    <div class="fixed bottom-6 right-6 z-40">
        <a 
            href="https://wa.me/6285808749131?text=Halo%20VexaHost,%20saya%20tertarik%20untuk%20konsultasi%20pembuatan%20website."
            target="_blank"
            rel="noopener noreferrer"
            class="group flex items-center gap-2 px-4 py-2.5 bg-[#25D366] hover:bg-[#20bd5a] text-white rounded-full shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-105 active:scale-95 border border-white/80 dark:border-zinc-800"
            aria-label="Konsultasi WhatsApp"
        >
            <svg class="w-5 h-5 fill-current animate-pulse" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
            <span class="text-xs font-bold tracking-wide">Konsultasi</span>
        </a>
    </div>

    <!-- Scroll Reveal Observer Script -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const revealSelector = '.vh-reveal-up, .vh-reveal-scale, .vh-reveal-left, .vh-reveal-right, .vh-reveal-tilt';
            const revealElements = document.querySelectorAll(revealSelector);
            
            if ('IntersectionObserver' in window) {
                const observer = new IntersectionObserver((entries, obs) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('vh-revealed');
                            obs.unobserve(entry.target);
                        }
                    });
                }, {
                    root: null,
                    rootMargin: '0px 0px -30px 0px',
                    threshold: 0.08
                });

                revealElements.forEach(el => observer.observe(el));
            } else {
                revealElements.forEach(el => el.classList.add('vh-revealed'));
            }
        });
    </script>

</body>
</html>
