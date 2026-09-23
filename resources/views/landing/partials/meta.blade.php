@php
    /*
    |----------------------------------------------------------------------
    | SEO source of truth — ubah di sini saja, semua tag ikut menyesuaikan.
    |----------------------------------------------------------------------
    */
    $siteName  = 'VexaHost Build';
    $seoTitle  = $seoTitle ?? 'VexaHost Build — Jasa Pembuatan Website UMKM Mulai Rp 499rb';
    $seoDesc   = $seoDesc ?? 'Jasa pembuatan website profesional untuk UMKM Indonesia bersama VexaHost. Landing Page, Company Profile, sampai Toko Online + Kasir POS. Mulai Rp 499.000, selesai 2-6 hari kerja.';
    $ogImage   = asset('images/og-image.png');
    $logoUrl   = asset('images/favicon-512x512.png');
    $waNumber  = '+6285808749131';
    $email     = 'vexahostcloudtech@gmail.com';
    $seoRobots = $seoRobots ?? 'index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1';

    // Alamat aplikasi induk. `@id` di bawah wajib sama persis dengan yang ditulis
    // repo vexahost (url('/') . '#organization', tanpa garis miring) — beda satu
    // karakter, relasi induk-anak tidak terbaca.
    $vexahostUrl = rtrim(config('services.vexahost.url', 'https://vexahostcloud.my.id'), '/');

    $homeUrl = rtrim(route('home'), '/') . '/';
    $orgId   = rtrim($homeUrl, '/') . '#organization';
    $siteId  = rtrim($homeUrl, '/') . '#website';

    // Ukuran og:image dibaca dari berkasnya sendiri, seperti di WA Gateway:
    // angka mati bisa diam-diam salah begitu gambarnya diganti, dan pratinjau
    // tautan di WhatsApp jadi terpotong.
    $ukuranGambar = @getimagesize(public_path('images/og-image.png')) ?: null;

    // Semua route (/, /company-profile, /vexahost) menampilkan konten yang sama,
    // jadi canonical selalu diarahkan ke beranda agar tidak dianggap duplikat.
    $canonical = $canonical ?? $homeUrl;

    $faqs = [
        ['Apakah bisa bayar bertahap atau dicicil?', 'Tentu bisa. Skema standar kami adalah DP 50% di awal pengerjaan untuk riset dan desain draft, dan pelunasan 50% setelah website selesai di-review dan siap online. Jika butuh skema termin khusus, silakan diskusikan bersama kami.'],
        ['Berapa lama proses pengerjaan website?', 'Rata-rata pengerjaan berkisar antara 2 hingga 6 hari kerja tergantung kelengkapan materi Anda. Untuk Landing Page sederhana, pengerjaan bahkan bisa selesai dalam 2-3 hari kerja.'],
        ['Apakah saya perlu paham teknis untuk mengelola website nanti?', 'Sama sekali tidak perlu. Kami merancang website yang sangat mudah dikelola. Jika Anda ingin mengganti nomor WhatsApp, menambah menu, atau mengubah promo, cukup chat kami atau gunakan tutorial singkat yang kami sediakan.'],
        ['Bagaimana kalau saya belum yakin apakah usaha saya butuh website?', 'Konsultasi 100% gratis tanpa paksaan beli. Kami bantu analisa apakah usaha Anda memang sudah waktunya membuat website atau cukup mengoptimalkan saluran gratis terlebih dahulu.'],
        ['Apakah ada biaya bulanan setelah website jadi?', 'Tidak ada biaya bulanan wajib dari kami. Biaya pembuatan website dibayar sekali di awal. Anda hanya perlu memperpanjang sewa nama domain (.com/.id) dan cloud server secara tahunan, rata-rata mulai Rp300.000 - Rp600.000 per tahun.'],
    ];

    $packages = [
        ['Landing Page Starter', 'Website 1 halaman fokus untuk promosi cepat produk, jasa, atau kampanye iklan media sosial.', 499000],
        ['Company Profile Bisnis', 'Website 5 halaman lengkap untuk membangun profil bisnis yang profesional dan kredibel di Google. Termasuk domain resmi dan server 1 tahun.', 999000],
        ['Toko Online & Kasir POS', 'Website jualan online 24 jam plus sistem kasir web (POS) untuk transaksi toko, cetak struk, dan rekap laporan penjualan.', 1500000],
    ];

    $graph = [
        [
            '@type' => 'ProfessionalService',
            '@id' => $orgId,
            'name' => $siteName,
            // Nama sengaja dibedakan dari induknya ("VexaHost"), sama seperti
            // "VexaHost WA Gateway". Nama identik membuat Google menggabungkan
            // atau menukar kedua entitas.
            'alternateName' => ['VexaHost Jasa Website', 'Jasa Website VexaHost', 'VexaHost Web Development'],
            'url' => $homeUrl,
            'logo' => ['@type' => 'ImageObject', 'url' => $logoUrl, 'width' => 512, 'height' => 512],
            'image' => $ogImage,
            'description' => 'Agensi digital pembuatan website untuk UMKM Indonesia: landing page, company profile, toko online, dan sistem kasir POS berbasis web.',
            'telephone' => $waNumber,
            'email' => $email,
            'priceRange' => 'Rp499.000 - Rp1.500.000',
            'currenciesAccepted' => 'IDR',
            'paymentAccepted' => 'Transfer Bank, QRIS',
            /* TODO: lengkapi addressLocality & addressRegion (kota/provinsi usaha)
               agar peluang muncul di hasil pencarian lokal jauh lebih besar. */
            'address' => ['@type' => 'PostalAddress', 'addressCountry' => 'ID'],
            'areaServed' => ['@type' => 'Country', 'name' => 'Indonesia'],
            'knowsLanguage' => 'id-ID',
            // Bukan `sameAs`: itu berarti "entitas yang sama", padahal situs induk
            // dan WA Gateway adalah entitas berbeda. Relasi yang benar adalah
            // parentOrganization, persis seperti yang dipakai WA Gateway.
            'parentOrganization' => [
                '@type' => 'Organization',
                '@id' => $vexahostUrl . '#organization',
                'name' => 'VexaHost',
                'url' => $vexahostUrl,
            ],
            'hasOfferCatalog' => [
                '@type' => 'OfferCatalog',
                'name' => 'Paket Pembuatan Website UMKM',
                'itemListElement' => collect($packages)->map(fn ($p) => [
                    '@type' => 'Offer',
                    'name' => $p[0],
                    'description' => $p[1],
                    'price' => (string) $p[2],
                    'priceCurrency' => 'IDR',
                    'priceValidUntil' => '2028-12-31',
                    'availability' => 'https://schema.org/InStock',
                    'url' => $homeUrl . '#harga',
                    'itemOffered' => [
                        '@type' => 'Service',
                        'name' => $p[0],
                        'serviceType' => 'Jasa Pembuatan Website',
                        'provider' => ['@id' => $orgId],
                        'areaServed' => ['@type' => 'Country', 'name' => 'Indonesia'],
                    ],
                ])->all(),
            ],
            'contactPoint' => [
                '@type' => 'ContactPoint',
                'contactType' => 'customer service',
                'telephone' => $waNumber,
                'email' => $email,
                'areaServed' => 'ID',
                'availableLanguage' => ['Indonesian', 'English'],
            ],
        ],
        [
            '@type' => 'WebSite',
            '@id' => $siteId,
            'url' => $homeUrl,
            'name' => $siteName,
            'description' => $seoDesc,
            'inLanguage' => 'id-ID',
            'publisher' => ['@id' => $orgId],
        ],
        [
            // Padanan node Product (vexahost) dan SoftwareApplication (WA Gateway):
            // rentang harga ringkas yang dibaca mesin pencari & AI Overview.
            '@type' => 'Service',
            '@id' => rtrim($homeUrl, '/') . '#service',
            'name' => 'Jasa Pembuatan Website UMKM VexaHost',
            'serviceType' => 'Jasa Pembuatan Website',
            'image' => $ogImage,
            'description' => 'Pembuatan landing page, company profile, toko online, dan sistem kasir POS berbasis web untuk UMKM Indonesia.',
            'provider' => ['@id' => $orgId],
            'brand' => ['@type' => 'Brand', 'name' => 'VexaHost'],
            'areaServed' => ['@type' => 'Country', 'name' => 'Indonesia'],
            'offers' => [
                '@type' => 'AggregateOffer',
                'priceCurrency' => 'IDR',
                'lowPrice' => (string) collect($packages)->min(2),
                'highPrice' => (string) collect($packages)->max(2),
                'offerCount' => (string) count($packages),
                'priceValidUntil' => '2028-12-31',
                'availability' => 'https://schema.org/InStock',
                'url' => $homeUrl . '#harga',
            ],
        ],
        [
            '@type' => 'WebPage',
            '@id' => $canonical . '#webpage',
            'url' => $canonical,
            'name' => $seoTitle,
            'description' => $seoDesc,
            'isPartOf' => ['@id' => $siteId],
            'about' => ['@id' => $orgId],
            'inLanguage' => 'id-ID',
            'primaryImageOfPage' => ['@type' => 'ImageObject', 'url' => $ogImage],
        ],
        [
            '@type' => 'FAQPage',
            '@id' => $canonical . '#faq',
            'inLanguage' => 'id-ID',
            'mainEntity' => collect($faqs)->map(fn ($f) => [
                '@type' => 'Question',
                'name' => $f[0],
                'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f[1]],
            ])->all(),
        ],
    ];

    // Remah jejak, sama seperti dua repo lainnya. Halaman yang mengirim
    // $breadcrumbs mendapat jalur navigasi di hasil pencarian; butir terakhir
    // sengaja tanpa 'item' karena itu halaman yang sedang dibuka.
    if (! empty($breadcrumbs ?? [])) {
        $graph[] = [
            '@type' => 'BreadcrumbList',
            '@id' => $canonical . '#breadcrumb',
            'itemListElement' => collect($breadcrumbs)->values()
                ->map(fn (array $remah, int $i) => array_filter([
                    '@type' => 'ListItem',
                    'position' => $i + 1,
                    'name' => $remah['name'],
                    'item' => $remah['url'] ?? null,
                ]))->all(),
        ];
    }
@endphp

{{-- ============ Primary SEO ============ --}}
<title>{{ $seoTitle }}</title>
<meta name="title" content="{{ $seoTitle }}">
<meta name="description" content="{{ $seoDesc }}">
<link rel="canonical" href="{{ $canonical }}">
<meta name="robots" content="{{ $seoRobots }}">
<meta name="googlebot" content="{{ $seoRobots }}">
<meta name="author" content="VexaHost">

{{-- ============ Geo Targeting (Pencarian Lokal Indonesia) ============ --}}
<meta name="geo.region" content="ID-JK">
<meta name="geo.placename" content="Jakarta, Indonesia">
<meta name="geo.position" content="-6.2088;106.8456">
<meta name="ICBM" content="-6.2088, 106.8456">
<meta name="theme-color" content="#EA580C">
<link rel="alternate" hreflang="id-ID" href="{{ $canonical }}">
<link rel="alternate" hreflang="x-default" href="{{ $canonical }}">

{{-- Verifikasi Google Search Console (opsional, hanya untuk metode "HTML tag").
     Isi GOOGLE_SITE_VERIFICATION di .env lalu jalankan: php artisan config:cache --}}
@if (config('services.google.site_verification'))
    <meta name="google-site-verification" content="{{ config('services.google.site_verification') }}">
@endif

{{-- ============ Favicon & Brand Icons ============ --}}
<link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon-16x16.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="48x48" href="{{ asset('images/favicon-48x48.png') }}">
<link rel="icon" type="image/png" sizes="96x96" href="{{ asset('images/favicon-96x96.png') }}">
<link rel="icon" type="image/png" sizes="192x192" href="{{ asset('images/favicon-192x192.png') }}">
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/apple-touch-icon.png') }}">
<link rel="manifest" href="{{ asset('manifest.json') }}">

{{-- ============ Open Graph (Facebook / WhatsApp / LinkedIn) ============ --}}
<meta property="og:type" content="website">
<meta property="og:site_name" content="{{ $siteName }}">
<meta property="og:locale" content="id_ID">
<meta property="og:url" content="{{ $canonical }}">
<meta property="og:title" content="{{ $seoTitle }}">
<meta property="og:description" content="{{ $seoDesc }}">
<meta property="og:image" content="{{ $ogImage }}">
<meta property="og:image:secure_url" content="{{ $ogImage }}">
<meta property="og:image:type" content="image/png">
@if ($ukuranGambar)
<meta property="og:image:width" content="{{ $ukuranGambar[0] }}">
<meta property="og:image:height" content="{{ $ukuranGambar[1] }}">
@endif
<meta property="og:image:alt" content="{{ $siteName }} — jasa pembuatan website profesional untuk UMKM Indonesia">

{{-- ============ Twitter / X ============ --}}
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:url" content="{{ $canonical }}">
<meta name="twitter:title" content="{{ $seoTitle }}">
<meta name="twitter:description" content="{{ $seoDesc }}">
<meta name="twitter:image" content="{{ $ogImage }}">
<meta name="twitter:image:alt" content="{{ $siteName }} — jasa pembuatan website profesional untuk UMKM Indonesia">

{{-- ============ Structured Data (schema.org) ============ --}}
<script type="application/ld+json">
{!! json_encode(['@context' => 'https://schema.org', '@graph' => $graph], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
</script>
