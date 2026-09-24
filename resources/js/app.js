import './bootstrap';
import Alpine from 'alpinejs';

// Inline theme check early to prevent FOUC
if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    document.documentElement.classList.add('dark');
} else {
    document.documentElement.classList.remove('dark');
}

Alpine.data('themeHandler', () => ({
    darkMode: localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches),

    init() {
        if (this.darkMode) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    },

    toggleTheme() {
        this.darkMode = !this.darkMode;
        if (this.darkMode) {
            document.documentElement.classList.add('dark');
            localStorage.setItem('theme', 'dark');
        } else {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('theme', 'light');
        }
        window.dispatchEvent(new CustomEvent('theme-changed', { detail: { darkMode: this.darkMode } }));
    }
}));

window.Alpine = Alpine;
Alpine.start();

/**
 * 3D Interactive Card Tilt & Glare Effect Engine
 * Responds to mouse cursor position with fluid 3D rotation and dynamic specular light reflection.
 */
function init3DCardTilt() {
    if (!window.matchMedia('(pointer: fine)').matches) return;

    const cards = document.querySelectorAll('.vh-card-3d');

    cards.forEach(card => {
        let bounds = null;
        let rafId = null;

        const updateBounds = () => {
            bounds = card.getBoundingClientRect();
        };

        const onPointerEnter = () => {
            updateBounds();
            card.classList.remove('vh-card-3d-reset');
            card.style.setProperty('--vh-glare-opacity', '1');
        };

        const onPointerMove = (e) => {
            if (!bounds) updateBounds();

            const mouseX = e.clientX - bounds.left;
            const mouseY = e.clientY - bounds.top;

            const xPct = (mouseX / bounds.width) - 0.5;
            const yPct = (mouseY / bounds.height) - 0.5;

            // Fluid 3D rotation angles
            const maxTilt = 8;
            const rotX = -yPct * maxTilt;
            const rotY = xPct * maxTilt;

            if (rafId) cancelAnimationFrame(rafId);

            rafId = requestAnimationFrame(() => {
                card.style.transform = `perspective(1000px) rotateX(${rotX.toFixed(2)}deg) rotateY(${rotY.toFixed(2)}deg) scale3d(1.02, 1.02, 1.02)`;
                card.style.setProperty('--vh-glare-x', `${(mouseX / bounds.width * 100).toFixed(1)}%`);
                card.style.setProperty('--vh-glare-y', `${(mouseY / bounds.height * 100).toFixed(1)}%`);
            });
        };

        const onPointerLeave = () => {
            if (rafId) cancelAnimationFrame(rafId);
            bounds = null;
            card.classList.add('vh-card-3d-reset');
            card.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1)';
            card.style.setProperty('--vh-glare-opacity', '0');
        };

        card.addEventListener('pointerenter', onPointerEnter);
        card.addEventListener('pointermove', onPointerMove);
        card.addEventListener('pointerleave', onPointerLeave);
        window.addEventListener('resize', () => { bounds = null; }, { passive: true });
    });
}

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init3DCardTilt);
} else {
    init3DCardTilt();
}
