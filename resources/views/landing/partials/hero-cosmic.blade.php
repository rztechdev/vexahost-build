<svg viewBox="0 0 1440 760" preserveAspectRatio="xMaxYMid slice" class="w-full h-full select-none overflow-visible" xmlns="http://www.w3.org/2000/svg">
    <defs>
        <!-- Cosmic Deep Space Gradient (VexaHost Obsidian & Warm Void) -->
        <linearGradient id="cosmicSpaceBg" x1="0%" y1="0%" x2="100%" y2="100%">
            <stop offset="0%" stop-color="#140803" />
            <stop offset="35%" stop-color="#180b05" />
            <stop offset="70%" stop-color="#0f0703" />
            <stop offset="100%" stop-color="#09090b" />
        </linearGradient>

        <!-- Upper Warm Nebula Glow -->
        <radialGradient id="nebulaWarmGlow" cx="75%" cy="25%" r="65%">
            <stop offset="0%" stop-color="#EA580C" stop-opacity="0.36" />
            <stop offset="45%" stop-color="#FB923C" stop-opacity="0.14" />
            <stop offset="100%" stop-color="#09090b" />
        </radialGradient>

        <!-- Lower Warm Nebula Glow -->
        <radialGradient id="nebulaWarmGlow2" cx="85%" cy="75%" r="55%">
            <stop offset="0%" stop-color="#C2410C" stop-opacity="0.30" />
            <stop offset="50%" stop-color="#EA580C" stop-opacity="0.10" />
            <stop offset="100%" stop-color="#09090b" />
        </radialGradient>

        <!-- Large Planet Clip Mask -->
        <clipPath id="largePlanetClip">
            <circle cx="1200" cy="160" r="82" />
        </clipPath>

        <!-- Ringed Planet Clip Mask -->
        <clipPath id="ringedPlanetClip">
            <circle cx="1260" cy="560" r="48" />
        </clipPath>

        <!-- Telescope Barrel Metallic Finish -->
        <linearGradient id="telescopeMetal" x1="0%" y1="0%" x2="0%" y2="100%">
            <stop offset="0%" stop-color="#64748b" />
            <stop offset="30%" stop-color="#94a3b8" />
            <stop offset="65%" stop-color="#475569" />
            <stop offset="100%" stop-color="#1e293b" />
        </linearGradient>

        <!-- Telescope Optical Ray Beam -->
        <linearGradient id="opticBeam" x1="0%" y1="100%" x2="100%" y2="0%">
            <stop offset="0%" stop-color="#FED7AA" stop-opacity="0.55" />
            <stop offset="40%" stop-color="#FB923C" stop-opacity="0.22" />
            <stop offset="100%" stop-color="#EA580C" stop-opacity="0" />
        </linearGradient>

        <!-- Meteor Shooting Star Trail -->
        <linearGradient id="meteorTrail" x1="100%" y1="0%" x2="0%" y2="100%">
            <stop offset="0%" stop-color="#FFFFFF" stop-opacity="1" />
            <stop offset="25%" stop-color="#FED7AA" stop-opacity="0.9" />
            <stop offset="70%" stop-color="#EA580C" stop-opacity="0.35" />
            <stop offset="100%" stop-color="#C2410C" stop-opacity="0" />
        </linearGradient>
    </defs>

    <!-- ======================================================== -->
    <!-- 1. Organic Cosmic Void Background (The Fluid Wave Boundary) -->
    <!-- Top starts at x=1220 (clean navbar), opens wide to x=1000   -->
    <!-- ======================================================== -->
    <g class="cosmic-backdrop">
        <!-- Main Wavy Fluid Shape: starts at x=1220 at top, opens wide to x=895 under header -->
        <path d="M 1220 0 
                 C 1220 50, 1150 85, 1070 115 
                 C 970 150, 890 185, 895 240 
                 C 900 285, 950 315, 1000 340 
                 C 1045 365, 1030 410, 970 450 
                 C 890 505, 880 560, 910 620 
                 C 950 670, 995 715, 1035 760 
                 L 2000 760 
                 L 2000 0 Z" 
              fill="url(#cosmicSpaceBg)" />

        <!-- Nebula ambient overlays -->
        <path d="M 1220 0 
                 C 1220 50, 1150 85, 1070 115 
                 C 970 150, 890 185, 895 240 
                 C 900 285, 950 315, 1000 340 
                 C 1045 365, 1030 410, 970 450 
                 C 890 505, 880 560, 910 620 
                 C 950 670, 995 715, 1035 760 
                 L 2000 760 
                 L 2000 0 Z" 
              fill="url(#nebulaWarmGlow)" />

        <path d="M 1220 0 
                 C 1220 50, 1150 85, 1070 115 
                 C 970 150, 890 185, 895 240 
                 C 900 285, 950 315, 1000 340 
                 C 1045 365, 1030 410, 970 450 
                 C 890 505, 880 560, 910 620 
                 C 950 670, 995 715, 1035 760 
                 L 2000 760 
                 L 2000 0 Z" 
              fill="url(#nebulaWarmGlow2)" />

        <!-- Warm Orange Luminous Edge / Wave Rim -->
        <path d="M 1220 0 
                 C 1220 50, 1150 85, 1070 115 
                 C 970 150, 890 185, 895 240 
                 C 900 285, 950 315, 1000 340 
                 C 1045 365, 1030 410, 970 450 
                 C 890 505, 880 560, 910 620 
                 C 950 670, 995 715, 1035 760" 
              fill="none" stroke="#EA580C" stroke-width="3" stroke-opacity="0.5" />

        <!-- Floating Organic Dark Blob 1 (Tucked safely near wave, far from text) -->
        <circle cx="830" cy="180" r="20" fill="url(#cosmicSpaceBg)" />
        <circle cx="830" cy="180" r="20" fill="#EA580C" fill-opacity="0.15" />
        <circle cx="830" cy="180" r="20" fill="none" stroke="#EA580C" stroke-width="1.5" stroke-opacity="0.4" />

        <!-- Floating Organic Dark Blob 2 (Tucked safely near lower wave) -->
        <ellipse cx="840" cy="550" rx="24" ry="36" transform="rotate(-12 840 550)" fill="url(#cosmicSpaceBg)" />
        <ellipse cx="840" cy="550" rx="24" ry="36" fill="#EA580C" fill-opacity="0.15" />
        <ellipse cx="840" cy="550" rx="24" ry="36" fill="none" stroke="#EA580C" stroke-width="1.5" stroke-opacity="0.4" />
    </g>

    <!-- ======================================================== -->
    <!-- 2. Cosmic Space: Planets, Moon, Meteors, Stars            -->
    <!-- Grand, wide, and fully visible                            -->
    <!-- ======================================================== -->

    <!-- Golden Crescent Moon (Top-Right, safe from any edge clipping) -->
    <g class="animate-cosmic-float" style="animation-duration: 7s;">
        <!-- Moon Halo Glow -->
        <circle cx="1365" cy="130" r="42" fill="#F59E0B" fill-opacity="0.22" filter="blur(8px)" />
        <!-- Crescent Shape -->
        <path d="M 1370 95 A 38 38 0 1 1 1325 170 A 30 30 0 1 0 1370 95 Z" fill="#FBBF24" />
        <path d="M 1368 99 A 34 34 0 1 1 1329 164 A 26 26 0 1 0 1368 99 Z" fill="#FDE68A" opacity="0.65" />
    </g>

    <!-- Large Striped Planet (Centered in the upper cosmic void) -->
    <g class="animate-cosmic-float" style="animation-duration: 9s;">
        <!-- Ambient Atmosphere Glow -->
        <circle cx="1200" cy="160" r="90" fill="#EA580C" fill-opacity="0.25" filter="blur(14px)" />
        <!-- Base Planet Sphere -->
        <circle cx="1200" cy="160" r="82" fill="#832C0D" />

        <!-- Layered Striped Atmospheric Bands (clipped to sphere) -->
        <g clip-path="url(#largePlanetClip)">
            <rect x="1100" y="65" width="200" height="190" fill="#9A3412" />
            <!-- Band 1: Warm Cream -->
            <path d="M 1100 108 Q 1200 130 1300 108 L 1300 130 Q 1200 152 1100 130 Z" fill="#FED7AA" />
            <!-- Band 2: Warm Amber/Orange -->
            <path d="M 1100 135 Q 1200 156 1300 135 L 1300 160 Q 1200 182 1100 160 Z" fill="#FB923C" />
            <!-- Band 3: Light Sand/White -->
            <path d="M 1100 168 Q 1200 185 1300 168 L 1300 185 Q 1200 202 1100 185 Z" fill="#FFEDD5" />
            <!-- Band 4: Deep Terracotta -->
            <path d="M 1100 190 Q 1200 208 1300 190 L 1300 214 Q 1200 232 1100 214 Z" fill="#C2410C" />
            
            <!-- Crater Spots (like reference image) -->
            <ellipse cx="1155" cy="144" rx="12" ry="7" fill="#7C2D12" opacity="0.6" />
            <ellipse cx="1245" cy="176" rx="13" ry="7" fill="#7C2D12" opacity="0.5" />
            <circle cx="1202" cy="118" r="6.5" fill="#7C2D12" opacity="0.55" />
            <circle cx="1150" cy="198" r="6" fill="#7C2D12" opacity="0.45" />

            <!-- Spherical Shadow Curve on right -->
            <path d="M 1200 78 A 82 82 0 0 1 1282 160 A 82 82 0 0 1 1200 242 Q 1245 160 1200 78 Z" fill="#180B04" fill-opacity="0.48" />
        </g>
        <!-- Luminous Planet Rim -->
        <circle cx="1200" cy="160" r="82" fill="none" stroke="#FED7AA" stroke-width="2.5" stroke-opacity="0.55" />
    </g>

    <!-- Saturn-style Ringed Planet (Centered in the lower cosmic void) -->
    <g class="animate-cosmic-float" style="animation-duration: 8s; animation-delay: 1.2s;">
        <!-- Ring Back (behind sphere) -->
        <ellipse cx="1260" cy="560" rx="94" ry="24" transform="rotate(-22 1260 560)" fill="none" stroke="#FED7AA" stroke-width="9.5" stroke-opacity="0.75" />
        <ellipse cx="1260" cy="560" rx="86" ry="20" transform="rotate(-22 1260 560)" fill="none" stroke="#EA580C" stroke-width="2.5" stroke-opacity="0.85" />

        <!-- Planet Sphere -->
        <circle cx="1260" cy="560" r="48" fill="#EA580C" />
        <g clip-path="url(#ringedPlanetClip)">
            <circle cx="1260" cy="560" r="48" fill="#EA580C" />
            <path d="M 1195 542 Q 1260 560 1325 542 L 1325 570 Q 1260 588 1195 570 Z" fill="#FB923C" />
            <path d="M 1195 576 Q 1260 590 1325 576 L 1325 596 Q 1260 610 1195 596 Z" fill="#C2410C" />
            <!-- Shadow -->
            <path d="M 1260 512 A 48 48 0 0 1 1308 560 A 48 48 0 0 1 1260 608 Q 1290 560 1260 512 Z" fill="#180B04" fill-opacity="0.45" />
        </g>

        <!-- Ring Front (in front of sphere, crossing lower quadrant) -->
        <path d="M 1178 587 C 1183 594, 1222 608, 1278 598 C 1330 588, 1352 566, 1348 556" fill="none" stroke="#FED7AA" stroke-width="9.5" stroke-linecap="round" stroke-opacity="0.9" />
        <path d="M 1181 586 C 1186 591, 1224 605, 1275 596 C 1326 587, 1347 567, 1343 557" fill="none" stroke="#FB923C" stroke-width="2.5" stroke-linecap="round" />
    </g>

    <!-- Shooting Stars / Meteors -->
    <g class="shooting-stars">
        <!-- Meteor 1 (near top planet) -->
        <line x1="1130" y1="40" x2="1060" y2="110" stroke="url(#meteorTrail)" stroke-width="4" stroke-linecap="round" />
        <circle cx="1060" cy="110" r="3.5" fill="#FFFFFF" />

        <!-- Meteor 2 (near crescent moon) -->
        <line x1="1310" y1="35" x2="1240" y2="105" stroke="url(#meteorTrail)" stroke-width="3.5" stroke-linecap="round" />
        <circle cx="1240" cy="105" r="3" fill="#FFFFFF" />

        <!-- Meteor 3 (upper right of moon) -->
        <line x1="1420" y1="85" x2="1350" y2="155" stroke="url(#meteorTrail)" stroke-width="3.5" stroke-linecap="round" />
        <circle cx="1350" cy="155" r="3" fill="#FFFFFF" />

        <!-- Meteor 4 (central cosmos) -->
        <line x1="1260" y1="260" x2="1190" y2="330" stroke="url(#meteorTrail)" stroke-width="3.5" stroke-linecap="round" />
        <circle cx="1190" cy="330" r="3" fill="#FFFFFF" />

        <!-- Meteor 5 (lower cosmos above Saturn) -->
        <line x1="1380" y1="380" x2="1310" y2="450" stroke="url(#meteorTrail)" stroke-width="4" stroke-linecap="round" />
        <circle cx="1310" cy="450" r="3.5" fill="#FFFFFF" />

        <!-- Meteor 6 (bottom space) -->
        <line x1="1220" y1="640" x2="1165" y2="695" stroke="url(#meteorTrail)" stroke-width="2.5" stroke-linecap="round" />
        <circle cx="1165" cy="695" r="2" fill="#FFFFFF" />
    </g>

    <!-- Twinkling Sparkle Stars (4-point crosses) & Star Dots -->
    <g class="twinkle-stars">
        <!-- Sparkle 1 -->
        <path d="M 1110 240 l 3 9 l 9 3 l -9 3 l -3 9 l -3 -9 l -9 -3 l 9 -3 Z" fill="#FED7AA" class="animate-pulse" style="animation-duration: 2.2s;" />
        <!-- Sparkle 2 -->
        <path d="M 1300 210 l 2.5 7.5 l 7.5 2.5 l -7.5 2.5 l -2.5 7.5 l -2.5 -7.5 l -7.5 -2.5 l 7.5 -2.5 Z" fill="#FFFFFF" class="animate-pulse" style="animation-duration: 3.1s;" />
        <!-- Sparkle 3 -->
        <path d="M 1140 400 l 2 5 l 5 2 l -5 2 l -2 5 l -2 -5 l -5 -2 l 5 -2 Z" fill="#FB923C" class="animate-pulse" style="animation-duration: 2.7s;" />
        <!-- Sparkle 4 -->
        <path d="M 1170 90 l 2.5 6 l 6 2.5 l -6 2.5 l -2.5 6 l -2.5 -6 l -6 -2.5 l 6 -2.5 Z" fill="#FFF" class="animate-pulse" style="animation-duration: 1.8s;" />
        <!-- Sparkle 5 -->
        <path d="M 1190 480 l 2 5 l 5 2 l -5 2 l -2 5 l -2 -5 l -5 -2 l 5 -2 Z" fill="#FED7AA" class="animate-pulse" style="animation-duration: 2.5s;" />
        <!-- Sparkle 6 -->
        <path d="M 1390 260 l 2 6 l 6 2 l -6 2 l -2 6 l -2 -6 l -6 -2 l 6 -2 Z" fill="#FFFFFF" class="animate-pulse" style="animation-duration: 3.4s;" />

        <!-- Circular Star Dots Scattered -->
        <circle cx="1080" cy="90" r="2.5" fill="#FED7AA" opacity="0.85" />
        <circle cx="1150" cy="140" r="3" fill="#FFF" opacity="0.9" />
        <circle cx="1270" cy="50" r="2.5" fill="#FB923C" opacity="0.85" />
        <circle cx="1390" cy="190" r="2.5" fill="#FED7AA" opacity="0.9" />
        <circle cx="1100" cy="300" r="2" fill="#FFF" opacity="0.75" />
        <circle cx="1210" cy="340" r="3" fill="#FED7AA" opacity="0.85" />
        <circle cx="1170" cy="420" r="2.5" fill="#FFF" opacity="0.9" />
        <circle cx="1350" cy="480" r="3" fill="#FB923C" opacity="0.8" />
        <circle cx="1120" cy="580" r="2.5" fill="#FED7AA" opacity="0.75" />
        <circle cx="1220" cy="640" r="2.5" fill="#FFF" opacity="0.7" />
        <circle cx="1100" cy="700" r="2" fill="#FED7AA" opacity="0.8" />

        <!-- Classic Hollow Ring Stars (from reference design) -->
        <circle cx="1310" cy="280" r="4.5" fill="none" stroke="#FFFFFF" stroke-width="1.5" opacity="0.7" />
        <circle cx="1360" cy="420" r="4.5" fill="none" stroke="#FED7AA" stroke-width="1.5" opacity="0.8" />
        <circle cx="1390" cy="640" r="4" fill="none" stroke="#FB923C" stroke-width="1.5" opacity="0.7" />
    </g>

    <!-- ======================================================== -->
    <!-- 3. Foreground: The Astronomer & The Telescope             -->
    <!-- Positioned with generous clearance from left text & button -->
    <!-- ======================================================== -->
    <g id="astronomer-telescope-group" transform="translate(20, 0)">
        <!-- Luminous Optical Beam from Telescope Lens into Cosmos -->
        <polygon points="1040 320, 1060 350, 1260 180, 1180 120" fill="url(#opticBeam)" class="animate-pulse" style="animation-duration: 4s;" />

        <!-- Sleek Astronomical Telescope Assembly -->
        <g class="telescope-rig" id="telescope">
            <!-- Tripod Legs (Extend Tall to the Floor at y=700) -->
            <!-- Leg 1: Right/Back leg -->
            <line x1="900" y1="425" x2="995" y2="700" stroke="#334155" stroke-width="5.5" stroke-linecap="round" />
            <circle cx="995" cy="700" r="4.5" fill="#0f172a" />

            <!-- Leg 2: Center leg -->
            <line x1="900" y1="425" x2="905" y2="715" stroke="#64748b" stroke-width="5.5" stroke-linecap="round" />
            <circle cx="905" cy="715" r="4.5" fill="#0f172a" />

            <!-- Leg 3: Left/Front leg -->
            <line x1="900" y1="425" x2="815" y2="705" stroke="#94a3b8" stroke-width="5.5" stroke-linecap="round" />
            <circle cx="815" cy="705" r="4.5" fill="#0f172a" />

            <!-- Tripod Leg Spreader Bracket -->
            <polygon points="855 570, 905 575, 950 565" fill="none" stroke="#475569" stroke-width="2.5" />
            <circle cx="905" cy="575" r="4" fill="#EA580C" />

            <!-- Tripod Yoke Mount Hub -->
            <rect x="888" y="410" width="24" height="28" rx="4" fill="#1e293b" />
            <circle cx="900" cy="423" r="12" fill="#475569" />
            <circle cx="900" cy="423" r="6.5" fill="#EA580C" />
            <rect x="910" y="420" width="9" height="5.5" rx="1.5" fill="#94a3b8" />

            <!-- Main Telescope Barrel (Tilted upward at ~-22deg towards the cosmic bay) -->
            <g transform="rotate(-22 900 422)">
                <!-- Main Cylinder Barrel -->
                <rect x="760" y="406" width="270" height="32" rx="4.5" fill="url(#telescopeMetal)" />
                <!-- Reflection Highlight -->
                <line x1="765" y1="412" x2="1025" y2="412" stroke="#FFFFFF" stroke-width="2" stroke-opacity="0.4" />
                <!-- Shadow Underbelly -->
                <line x1="765" y1="434" x2="1025" y2="434" stroke="#0f172a" stroke-width="2.5" stroke-opacity="0.5" />

                <!-- Orange Accent Rings (VexaHost Signature) -->
                <rect x="990" y="404" width="9" height="36" fill="#EA580C" rx="1.5" />
                <rect x="1003" y="404" width="4.5" height="36" fill="#FB923C" rx="1" />

                <!-- Front Aperture Hood (Black Collar entering cosmic bay) -->
                <rect x="1012" y="401" width="32" height="42" rx="4.5" fill="#0f172a" />
                <rect x="1040" y="405" width="6.5" height="34" rx="2.5" fill="#475569" />
                <ellipse cx="1046" cy="422" rx="3" ry="15" fill="#fed7aa" opacity="0.85" />

                <!-- Finder Scope on top -->
                <rect x="915" y="388" width="68" height="12" rx="2.5" fill="#1e293b" />
                <line x1="930" y1="399" x2="930" y2="407" stroke="#475569" stroke-width="3" />
                <line x1="968" y1="399" x2="968" y2="407" stroke="#475569" stroke-width="3" />
                <circle cx="981" cy="394" r="2.5" fill="#EA580C" />

                <!-- Focuser & Eyepiece Unit (Back) -->
                <rect x="735" y="411" width="25" height="22" rx="2.5" fill="#334155" />
                <rect x="712" y="415" width="24" height="14" rx="2" fill="#0f172a" />
                <rect x="703" y="413" width="9" height="18" rx="2.5" fill="#64748b" />
                <circle cx="747" cy="404" r="6" fill="#94a3b8" />
                <circle cx="747" cy="440" r="6" fill="#64748b" />
            </g>
        </g>

        <!-- The Explorer / Astronomer Character (Complete body, clearly visible in white area) -->
        <g class="astronomer-figure" id="astronomer">
            <!-- Floor Shadow -->
            <ellipse cx="740" cy="705" rx="55" ry="9" fill="#18181b" fill-opacity="0.22" />

            <!-- Left Leg (back) -->
            <path d="M 742 510 L 758 630 L 754 695 L 738 695 L 728 630 L 724 510 Z" fill="#1e293b" />
            <!-- Left Shoe -->
            <path d="M 736 690 L 764 690 C 770 690, 773 702, 768 705 L 728 705 C 726 705, 726 690, 736 690 Z" fill="#0f172a" />

            <!-- Right Leg (front) -->
            <path d="M 712 505 L 700 625 L 690 690 L 708 690 L 718 625 L 732 505 Z" fill="#334155" />
            <!-- Right Shoe -->
            <path d="M 688 686 L 716 686 C 722 686, 725 698, 720 701 L 682 701 C 680 701, 680 686, 688 686 Z" fill="#0f172a" />

            <!-- Torso & Coat (Warm Terracotta / Chestnut #832C0D matching reference) -->
            <!-- Coat Body leaning forward toward eyepiece -->
            <path d="M 714 415 C 732 402, 780 420, 806 442 C 792 498, 768 558, 710 540 C 700 498, 696 450, 714 415 Z" fill="#7C2D12" />
            <path d="M 722 419 C 740 411, 776 425, 798 446 C 784 492, 762 536, 720 528 Z" fill="#9A3412" opacity="0.65" />

            <!-- Arm reaching up to telescope focuser -->
            <path d="M 760 432 C 784 438, 822 448, 844 458 C 839 472, 818 472, 792 461 L 760 452 Z" fill="#7C2D12" />
            <circle cx="846" cy="459" r="8.5" fill="#EA580C" /> <!-- Orange cuff -->
            <!-- Hand -->
            <path d="M 850 454 C 861 453, 866 460, 862 468 C 856 473, 849 469, 847 462 Z" fill="#e0a37e" />

            <!-- Head & Neck -->
            <!-- Neck -->
            <path d="M 772 418 L 790 427 L 783 442 L 765 432 Z" fill="#d4956a" />
            <!-- Face profile peering into scope -->
            <ellipse cx="791" cy="420" rx="15" ry="16" transform="rotate(22 791 420)" fill="#e0a37e" />
            <path d="M 797 420 Q 803 422 806 420" stroke="#451a03" stroke-width="1.5" fill="none" stroke-linecap="round" />
            <path d="M 799 417 L 808 426 L 799 432 Z" fill="#e0a37e" />
            <!-- Hair (Dark Brown / Charcoal) -->
            <path d="M 776 412 C 779 397, 800 394, 806 408 C 809 416, 798 421, 788 421 C 778 421, 774 418, 776 412 Z" fill="#1c1917" />
            <path d="M 773 418 C 769 407, 783 400, 790 404 C 783 413, 776 415, 773 418 Z" fill="#292524" />
        </g>
    </g>
</svg>
