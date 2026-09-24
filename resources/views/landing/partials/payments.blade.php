@php
    // Logo pembayaran asli (tersimpan lokal di public/images/payments).
    // Tambah/kurangi cukup dengan menambah file SVG lalu daftarkan di sini.
    $payments = [
        ['file' => 'visa.svg',       'name' => 'Visa'],
        ['file' => 'mastercard.svg', 'name' => 'Mastercard'],
        ['file' => 'jcb.svg',        'name' => 'JCB'],
        ['file' => 'amex.svg',       'name' => 'American Express'],
        ['file' => 'paypal.svg',     'name' => 'PayPal'],
        ['file' => 'qris.svg',       'name' => 'QRIS'],
        ['file' => 'ovo.svg',        'name' => 'OVO'],
        ['file' => 'dana.svg',       'name' => 'DANA'],
        ['file' => 'gopay.svg',      'name' => 'GoPay'],
        ['file' => 'shopee.svg',     'name' => 'ShopeePay'],
        ['file' => 'linkaja.svg',    'name' => 'LinkAja'],
        ['file' => 'bca.svg',            'name' => 'Bank BCA'],
        ['file' => 'bni.svg',            'name' => 'Bank BNI'],
        ['file' => 'bri.svg',            'name' => 'Bank BRI'],
        ['file' => 'mandiri.svg',        'name' => 'Bank Mandiri'],
        ['file' => 'mandiri_emoney.svg', 'name' => 'Mandiri e-money'],
        ['file' => 'bsi.svg',            'name' => 'Bank BSI'],
        ['file' => 'tokopedia.svg',      'name' => 'Tokopedia'],
        ['file' => 'alfamart.svg',       'name' => 'Alfamart'],
        ['file' => 'indomaret.svg',      'name' => 'Indomaret'],
    ];
@endphp

<section aria-label="Metode Pembayaran yang Didukung"
         class="relative border-y border-zinc-200 dark:border-zinc-800/80 bg-white dark:bg-zinc-950 py-4 sm:py-5 overflow-hidden transition-colors duration-300 w-full">
    <!-- Track marquee full width edge-to-edge -->
    <div class="vh-pay-marquee relative w-full overflow-hidden">
        <!-- Fade kiri & kanan -->
        <div class="pointer-events-none absolute left-0 top-0 bottom-0 w-12 sm:w-24 z-10 bg-gradient-to-r from-white dark:from-zinc-950 to-transparent"></div>
        <div class="pointer-events-none absolute right-0 top-0 bottom-0 w-12 sm:w-24 z-10 bg-gradient-to-l from-white dark:from-zinc-950 to-transparent"></div>

        <div class="vh-pay-track flex items-center gap-3 sm:gap-4 w-max">
            {{-- Dua salinan untuk loop mulus --}}
            @foreach(array_merge($payments, $payments) as $p)
                <div class="shrink-0 h-9 sm:h-10 px-3 sm:px-4 flex items-center justify-center rounded-xl bg-white border border-zinc-200/80 shadow-sm"
                     title="{{ $p['name'] }}">
                    <img src="{{ asset('images/payments/' . $p['file']) }}"
                         alt="{{ $p['name'] }}"
                         loading="lazy"
                         class="h-4 sm:h-5 w-auto max-w-[70px] sm:max-w-[84px] object-contain">
                </div>
            @endforeach
        </div>
    </div>
</section>

<style>
    @keyframes vh-pay-scroll {
        from { transform: translateX(0); }
        to   { transform: translateX(-50%); }
    }
    .vh-pay-track {
        animation: vh-pay-scroll 45s linear infinite;
        will-change: transform;
    }
    .vh-pay-marquee:hover .vh-pay-track {
        animation-play-state: paused;
    }
    @media (prefers-reduced-motion: reduce) {
        .vh-pay-track { animation: none; }
    }
</style>
