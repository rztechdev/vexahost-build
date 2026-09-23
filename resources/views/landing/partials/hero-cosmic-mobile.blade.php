<svg viewBox="0 0 440 350" preserveAspectRatio="xMidYMid slice" class="w-full h-full select-none overflow-hidden" xmlns="http://www.w3.org/2000/svg">
    <defs>
        <!-- Cosmic Deep Space Gradient for Mobile -->
        <linearGradient id="cosmicSpaceBgMob" x1="0%" y1="0%" x2="100%" y2="100%">
            <stop offset="0%" stop-color="#140803" />
            <stop offset="35%" stop-color="#180b05" />
            <stop offset="70%" stop-color="#0f0703" />
            <stop offset="100%" stop-color="#09090b" />
        </linearGradient>

        <!-- Wave Glowing Crest Gradient -->
        <linearGradient id="waveGlowMob" x1="0%" y1="0%" x2="100%" y2="0%">
            <stop offset="0%" stop-color="#EA580C" stop-opacity="0.2" />
            <stop offset="25%" stop-color="#FB923C" stop-opacity="0.85" />
            <stop offset="55%" stop-color="#FED7AA" stop-opacity="0.95" />
            <stop offset="80%" stop-color="#EA580C" stop-opacity="0.8" />
            <stop offset="100%" stop-color="#C2410C" stop-opacity="0.3" />
        </linearGradient>

        <!-- Upper Warm Nebula Glow -->
        <radialGradient id="nebulaWarmGlowMob" cx="72%" cy="40%" r="55%">
            <stop offset="0%" stop-color="#EA580C" stop-opacity="0.45" />
            <stop offset="50%" stop-color="#FB923C" stop-opacity="0.18" />
            <stop offset="100%" stop-color="#09090b" stop-opacity="0" />
        </radialGradient>

        <!-- Lower Warm Nebula Glow -->
        <radialGradient id="nebulaWarmGlow2Mob" cx="40%" cy="80%" r="50%">
            <stop offset="0%" stop-color="#C2410C" stop-opacity="0.40" />
            <stop offset="50%" stop-color="#EA580C" stop-opacity="0.15" />
            <stop offset="100%" stop-color="#09090b" stop-opacity="0" />
        </radialGradient>

        <!-- Large Planet Clip Mask -->
        <clipPath id="largePlanetClipMob">
            <circle cx="330" cy="115" r="38" />
        </clipPath>

        <!-- Ringed Planet Clip Mask -->
        <clipPath id="ringedPlanetClipMob">
            <circle cx="385" cy="225" r="23" />
        </clipPath>

        <!-- Telescope Barrel Metallic Finish -->
        <linearGradient id="telescopeMetalMob" x1="0%" y1="0%" x2="0%" y2="100%">
            <stop offset="0%" stop-color="#64748b" />
            <stop offset="30%" stop-color="#94a3b8" />
            <stop offset="65%" stop-color="#475569" />
            <stop offset="100%" stop-color="#1e293b" />
        </linearGradient>

        <!-- Telescope Optical Ray Beam -->
        <linearGradient id="opticBeamMob" x1="0%" y1="100%" x2="100%" y2="0%">
            <stop offset="0%" stop-color="#FED7AA" stop-opacity="0.75" />
            <stop offset="40%" stop-color="#FB923C" stop-opacity="0.32" />
            <stop offset="100%" stop-color="#EA580C" stop-opacity="0" />
        </linearGradient>

        <!-- Meteor Shooting Star Trail -->
        <linearGradient id="meteorTrailMob" x1="100%" y1="0%" x2="0%" y2="100%">
            <stop offset="0%" stop-color="#FFFFFF" stop-opacity="1" />
            <stop offset="25%" stop-color="#FED7AA" stop-opacity="0.9" />
            <stop offset="70%" stop-color="#EA580C" stop-opacity="0.35" />
            <stop offset="100%" stop-color="#C2410C" stop-opacity="0" />
        </linearGradient>
    </defs>

    <!-- ======================================================== -->
    <!-- 1. Organic Cosmic Void Fluid Wave Boundary                 -->
    <!-- Top curves naturally across the screen below CTA buttons   -->
    <!-- ======================================================== -->
    <g class="cosmic-wave-base-mob">
        <!-- Main Wavy Fluid Shape -->
        <path d="M 0 38 
                 C 65 14, 135 48, 205 22 
                 C 275 4, 340 38, 395 16 
                 C 415 10, 430 14, 440 18 
                 L 440 350 
                 L 0 350 Z" 
              fill="url(#cosmicSpaceBgMob)" />

        <!-- Luminous Wave Crest Glow Line -->
        <path d="M 0 38 
                 C 65 14, 135 48, 205 22 
                 C 275 4, 340 38, 395 16 
                 C 415 10, 430 14, 440 18" 
              fill="none" 
              stroke="url(#waveGlowMob)" 
              stroke-width="2.5" />

        <!-- Nebula Ambient Overlays -->
        <rect x="0" y="20" width="440" height="330" fill="url(#nebulaWarmGlowMob)" />
        <rect x="0" y="20" width="440" height="330" fill="url(#nebulaWarmGlow2Mob)" />
    </g>

    <!-- ======================================================== -->
    <!-- 2. Celestial Elements (Moon, Planets, Meteors, Stars)     -->
    <!-- ======================================================== -->

    <!-- Golden Crescent Moon -->
    <g class="animate-cosmic-float" style="animation-duration: 7s;">
        <circle cx="395" cy="62" r="22" fill="#F59E0B" fill-opacity="0.3" filter="blur(6px)" />
        <path d="M 398 42 A 20 20 0 1 1 374 82 A 16 16 0 1 0 398 42 Z" fill="#FBBF24" />
        <path d="M 397 45 A 17 17 0 1 1 377 78 A 13 13 0 1 0 397 45 Z" fill="#FDE68A" opacity="0.75" />
    </g>

    <!-- Large Striped Planet (Jupiter style) -->
    <g class="animate-cosmic-float" style="animation-duration: 9s;">
        <circle cx="330" cy="115" r="44" fill="#EA580C" fill-opacity="0.28" filter="blur(8px)" />
        <circle cx="330" cy="115" r="38" fill="#832C0D" />
        <g clip-path="url(#largePlanetClipMob)">
            <rect x="280" y="70" width="100" height="90" fill="#9A3412" />
            <path d="M 280 92 Q 330 102 380 92 L 380 102 Q 330 112 280 102 Z" fill="#FED7AA" />
            <path d="M 280 104 Q 330 114 380 104 L 380 116 Q 330 126 280 116 Z" fill="#FB923C" />
            <path d="M 280 119 Q 330 128 380 119 L 380 128 Q 330 137 280 128 Z" fill="#FFEDD5" />
            <path d="M 280 130 Q 330 139 380 130 L 380 142 Q 330 151 280 142 Z" fill="#C2410C" />
            <ellipse cx="308" cy="108" rx="6" ry="3.5" fill="#7C2D12" opacity="0.65" />
            <ellipse cx="350" cy="123" rx="7" ry="3.5" fill="#7C2D12" opacity="0.55" />
            <!-- Shadow Curve -->
            <path d="M 330 77 A 38 38 0 0 1 368 115 A 38 38 0 0 1 330 153 Q 352 115 330 77 Z" fill="#180B04" fill-opacity="0.5" />
        </g>
        <circle cx="330" cy="115" r="38" fill="none" stroke="#FED7AA" stroke-width="1.8" stroke-opacity="0.6" />
    </g>

    <!-- Saturn-style Ringed Planet -->
    <g class="animate-cosmic-float" style="animation-duration: 8s; animation-delay: 1.2s;">
        <!-- Ring behind -->
        <ellipse cx="385" cy="225" rx="46" ry="12" transform="rotate(-22 385 225)" fill="none" stroke="#FED7AA" stroke-width="5" stroke-opacity="0.8" />
        <ellipse cx="385" cy="225" rx="42" ry="10" transform="rotate(-22 385 225)" fill="none" stroke="#EA580C" stroke-width="1.5" stroke-opacity="0.85" />
        <!-- Planet body -->
        <circle cx="385" cy="225" r="23" fill="#EA580C" />
        <g clip-path="url(#ringedPlanetClipMob)">
            <circle cx="385" cy="225" r="23" fill="#EA580C" />
            <path d="M 355 216 Q 385 225 415 216 L 415 230 Q 385 239 355 230 Z" fill="#FB923C" />
            <path d="M 355 233 Q 385 240 415 233 L 415 243 Q 385 250 355 243 Z" fill="#C2410C" />
            <path d="M 385 202 A 23 23 0 0 1 408 225 A 23 23 0 0 1 385 248 Q 400 225 385 202 Z" fill="#180B04" fill-opacity="0.45" />
        </g>
        <!-- Ring in front -->
        <path d="M 345 239 C 347 242, 366 249, 394 244 C 420 239, 431 228, 429 223" fill="none" stroke="#FED7AA" stroke-width="5" stroke-linecap="round" stroke-opacity="0.9" />
        <path d="M 346 238 C 348 241, 367 247, 392 243 C 417 238, 428 228, 426 224" fill="none" stroke="#FB923C" stroke-width="1.5" stroke-linecap="round" />
    </g>

    <!-- Shooting Stars / Meteors -->
    <g class="shooting-stars">
        <line x1="280" y1="40" x2="235" y2="85" stroke="url(#meteorTrailMob)" stroke-width="2.5" stroke-linecap="round" />
        <circle cx="235" cy="85" r="2" fill="#FFFFFF" />

        <line x1="365" y1="35" x2="325" y2="75" stroke="url(#meteorTrailMob)" stroke-width="2" stroke-linecap="round" />
        <circle cx="325" cy="75" r="1.5" fill="#FFFFFF" />

        <line x1="420" y1="140" x2="380" y2="180" stroke="url(#meteorTrailMob)" stroke-width="2.2" stroke-linecap="round" />
        <circle cx="380" cy="180" r="1.8" fill="#FFFFFF" />
    </g>

    <!-- Twinkle Sparkle Stars & Dots -->
    <g class="twinkle-stars">
        <path d="M 270 120 l 2 5 l 5 2 l -5 2 l -2 5 l -2 -5 l -5 -2 l 5 -2 Z" fill="#FED7AA" class="animate-pulse" style="animation-duration: 2.2s;" />
        <path d="M 370 155 l 1.8 4.5 l 4.5 1.8 l -4.5 1.8 l -1.8 4.5 l -1.8 -4.5 l -4.5 -1.8 l 4.5 -1.8 Z" fill="#FFFFFF" class="animate-pulse" style="animation-duration: 3s;" />
        <path d="M 300 210 l 1.5 3.5 l 3.5 1.5 l -3.5 1.5 l -1.5 3.5 l -1.5 -3.5 l -3.5 -1.5 l 3.5 -1.5 Z" fill="#FB923C" class="animate-pulse" style="animation-duration: 2.6s;" />
        <path d="M 345 55 l 1.5 4 l 4 1.5 l -4 1.5 l -1.5 4 l -1.5 -4 l -4 -1.5 l 4 -1.5 Z" fill="#FFF" class="animate-pulse" style="animation-duration: 1.8s;" />

        <circle cx="255" cy="65" r="1.5" fill="#FED7AA" opacity="0.85" />
        <circle cx="295" cy="85" r="2" fill="#FFF" opacity="0.9" />
        <circle cx="360" cy="35" r="1.5" fill="#FB923C" opacity="0.85" />
        <circle cx="410" cy="100" r="1.8" fill="#FED7AA" opacity="0.9" />
        <circle cx="265" cy="170" r="1.5" fill="#FFF" opacity="0.75" />
        <circle cx="330" cy="180" r="2" fill="#FED7AA" opacity="0.85" />
        <circle cx="290" cy="245" r="1.5" fill="#FFF" opacity="0.9" />
        <circle cx="415" cy="280" r="2" fill="#FB923C" opacity="0.8" />
        <circle cx="250" cy="295" r="1.5" fill="#FED7AA" opacity="0.75" />
        <circle cx="320" cy="315" r="1.8" fill="#FFF" opacity="0.7" />
    </g>

    <!-- ======================================================== -->
    <!-- 3. The Astronomer & The Telescope                         -->
    <!-- ======================================================== -->
    <g id="astronomer-telescope-group-mob" transform="translate(10, 0)">
        <!-- Luminous Optical Beam from Telescope Lens into Cosmos -->
        <polygon points="175 160, 185 175, 310 95, 270 65" fill="url(#opticBeamMob)" class="animate-pulse" style="animation-duration: 4s;" />

        <!-- Sleek Astronomical Telescope Assembly -->
        <g class="telescope-rig-mob" id="telescope-mob">
            <!-- Tripod Legs -->
            <line x1="125" y1="210" x2="185" y2="335" stroke="#334155" stroke-width="3.5" stroke-linecap="round" />
            <circle cx="185" cy="335" r="3" fill="#0f172a" />

            <line x1="125" y1="210" x2="128" y2="345" stroke="#64748b" stroke-width="3.5" stroke-linecap="round" />
            <circle cx="128" cy="345" r="3" fill="#0f172a" />

            <line x1="125" y1="210" x2="70" y2="340" stroke="#94a3b8" stroke-width="3.5" stroke-linecap="round" />
            <circle cx="70" cy="340" r="3" fill="#0f172a" />

            <!-- Spreader Bracket -->
            <polygon points="95 285, 128 288, 155 282" fill="none" stroke="#475569" stroke-width="1.8" />
            <circle cx="128" cy="288" r="2.5" fill="#EA580C" />

            <!-- Mount Hub -->
            <rect x="117" y="200" width="16" height="18" rx="2.5" fill="#1e293b" />
            <circle cx="125" cy="209" r="8" fill="#475569" />
            <circle cx="125" cy="209" r="4.5" fill="#EA580C" />

            <!-- Main Telescope Barrel (Tilted towards cosmos) -->
            <g transform="rotate(-25 125 208)">
                <rect x="35" y="198" width="150" height="20" rx="3" fill="url(#telescopeMetalMob)" />
                <line x1="38" y1="202" x2="182" y2="202" stroke="#FFFFFF" stroke-width="1.2" stroke-opacity="0.4" />
                <line x1="38" y1="215" x2="182" y2="215" stroke="#0f172a" stroke-width="1.5" stroke-opacity="0.5" />

                <!-- VexaHost Accent Rings -->
                <rect x="162" y="196" width="6" height="24" fill="#EA580C" rx="1" />
                <rect x="170" y="196" width="3" height="24" fill="#FB923C" rx="0.8" />

                <!-- Objective Lens Cap -->
                <rect x="176" y="194" width="18" height="28" rx="3" fill="#0f172a" />
                <ellipse cx="194" cy="208" rx="2" ry="10" fill="#fed7aa" opacity="0.85" />

                <!-- Finder Scope on top -->
                <rect x="120" y="186" width="40" height="8" rx="1.5" fill="#1e293b" />
                <line x1="130" y1="194" x2="130" y2="198" stroke="#475569" stroke-width="2" />
                <line x1="150" y1="194" x2="150" y2="198" stroke="#475569" stroke-width="2" />

                <!-- Eyepiece end -->
                <rect x="20" y="201" width="16" height="14" rx="1.5" fill="#334155" />
                <rect x="6" y="204" width="14" height="8" rx="1.2" fill="#0f172a" />
            </g>
        </g>

        <!-- The Explorer / Astronomer Character -->
        <g class="astronomer-figure-mob" id="astronomer-mob">
            <!-- Shadow on ground -->
            <ellipse cx="40" cy="340" rx="32" ry="5.5" fill="#18181b" fill-opacity="0.35" />

            <!-- Legs Seated -->
            <path d="M 42 245 L 48 310 L 46 338 L 35 338 L 30 310 L 28 245 Z" fill="#1e293b" />
            <path d="M 35 336 L 52 336 C 54 336, 56 338, 55 342 C 53 344, 46 344, 33 344 L 33 336 Z" fill="#0f172a" />

            <path d="M 18 248 L 22 310 L 16 338 L 6 338 L 8 310 L 10 248 Z" fill="#334155" />
            <path d="M 6 336 L 22 336 C 24 336, 26 338, 25 342 C 23 344, 15 344, 4 344 L 4 336 Z" fill="#0f172a" />

            <!-- Torso (Warm VexaHost Orange Hoodie) -->
            <path d="M 16 170 
                     C 16 164, 42 164, 50 170 
                     L 52 230 
                     C 52 255, 8 255, 8 230 Z" 
                  fill="#EA580C" />

            <path d="M 19 174 L 24 245 L 34 245 L 40 174 Z" fill="#FB923C" />
            <path d="M 8 232 L 52 232 L 52 240 L 8 240 Z" fill="#1e293b" />

            <!-- Head & Face peering into eyepiece -->
            <ellipse cx="26" cy="148" rx="12" ry="14" fill="#FED7AA" />
            <path d="M 17 134 C 20 128, 36 128, 40 136 C 42 140, 38 147, 36 150 L 30 151 C 23 151, 14 144, 17 134 Z" fill="#1e293b" />
            <ellipse cx="28" cy="146" rx="2.8" ry="2.2" fill="#0f172a" />
            <ellipse cx="27" cy="146" rx="1" ry="1" fill="#FFF" />

            <!-- Arm leaning forward toward eyepiece -->
            <path d="M 38 175 Q 46 200 48 205 L 41 202 Q 38 190, 32 175 Z" fill="#EA580C" />
            <circle cx="48" cy="205" r="3.5" fill="#FED7AA" />
        </g>
    </g>
</svg>
