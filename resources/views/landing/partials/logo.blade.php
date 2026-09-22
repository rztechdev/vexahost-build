@props([
    'variant' => 'light',
    'size' => 'md',
    'showTagline' => true
])

@php
    $imgHeight = match($size) {
        'sm' => 'h-9 sm:h-10',
        'lg' => 'h-14 sm:h-16',
        default => 'h-11 sm:h-12',
    };
@endphp

<div class="inline-flex items-center gap-2 select-none group">
    <img 
        src="{{ asset('images/logo.png') }}"
        alt="VexaHost"
        class="{{ $imgHeight }} w-auto object-contain group-hover:scale-105 transition-transform duration-300"
    />
    <span class="text-xl font-extrabold tracking-tight text-[#2E2E2A] dark:text-zinc-50 font-fraunces">
        Vexa<span class="text-[#EA580C] dark:text-[#FB923C]">Host</span>
    </span>
</div>
