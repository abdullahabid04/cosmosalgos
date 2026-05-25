/**
 * COSMOS ALGOS — Animation & Effects Engine
 * Place this script at the END of <body>, or in @push('scripts')
 * after all existing scripts.
 */

(function () {
    'use strict';

    /* ══════════════════════════════════════════════════════
       1. INJECT BACKGROUND DOM ELEMENTS
       ══════════════════════════════════════════════════════ */
    function injectBackgroundElements() {
        // Main cosmos background wrapper
        const bg = document.createElement('div');
        bg.id = 'cosmos-bg';

        // Nebula orbs (gas clouds)
        for (let i = 1; i <= 4; i++) {
            const orb = document.createElement('div');
            orb.className = `cosmos-nebula cosmos-nebula-${i}`;
            bg.appendChild(orb);
        }

        // Shooting stars
        const shootingStarConfigs = [
            { top: '10%', left: '5%',  delay: '2s',  duration: '4s'  },
            { top: '30%', left: '60%', delay: '7s',  duration: '3s'  },
            { top: '60%', left: '20%', delay: '12s', duration: '5s'  },
            { top: '80%', left: '75%', delay: '4s',  duration: '3.5s'},
            { top: '15%', left: '40%', delay: '18s', duration: '4s'  },
            { top: '50%', left: '85%', delay: '9s',  duration: '3s'  },
        ];
        shootingStarConfigs.forEach(cfg => {
            const star = document.createElement('div');
            star.className = 'shooting-star';
            star.style.cssText = `top:${cfg.top};left:${cfg.left};animation-delay:${cfg.delay};animation-duration:${cfg.duration};`;
            bg.appendChild(star);
        });

        document.body.insertBefore(bg, document.body.firstChild);

        // Algo grid overlay
        const grid = document.createElement('div');
        grid.id = 'algo-grid';
        document.body.insertBefore(grid, document.body.firstChild);

        // Network canvas
        const canvas = document.createElement('canvas');
        canvas.id = 'network-canvas';
        document.body.insertBefore(canvas, document.body.firstChild);
    }

    /* ══════════════════════════════════════════════════════
       2. CUSTOM CURSOR
       ══════════════════════════════════════════════════════ */
    function initCursor() {
        // Don't run on touch-only devices
        if (window.matchMedia('(max-width: 768px)').matches) return;

        const cursor = document.createElement('div');
        cursor.id = 'cosmos-cursor';
        document.body.appendChild(cursor);

        const trail = document.createElement('div');
        trail.id = 'cosmos-cursor-trail';
        document.body.appendChild(trail);

        let mouseX = -100, mouseY = -100;
        let trailX = -100, trailY = -100;
        let rafId;

        // Comet tail history
        const cometHistory = [];
        const MAX_COMETS = 8;
        let cometTimer = 0;

        document.addEventListener('mousemove', e => {
            mouseX = e.clientX;
            mouseY = e.clientY;
        });

        // Main cursor — snaps instantly
        document.addEventListener('mousemove', e => {
            cursor.style.left = e.clientX + 'px';
            cursor.style.top  = e.clientY + 'px';
        });

        // Trail cursor — smooth lag via RAF
        function animateTrail() {
            const lag = 0.10;
            trailX += (mouseX - trailX) * lag;
            trailY += (mouseY - trailY) * lag;

            trail.style.left = trailX + 'px';
            trail.style.top  = trailY + 'px';

            // Spawn comet particles at intervals
            cometTimer++;
            if (cometTimer % 4 === 0) {
                spawnComet(trailX, trailY);
            }

            rafId = requestAnimationFrame(animateTrail);
        }
        animateTrail();

        // Comet tail particles
        function spawnComet(x, y) {
            const dot = document.createElement('div');
            dot.className = 'cursor-comet';
            const size = Math.random() * 5 + 2;
            const hue  = Math.random() > 0.6 ? '0, 212, 255' : '224, 37, 26';
            dot.style.cssText = `
                width:${size}px;
                height:${size}px;
                left:${x}px;
                top:${y}px;
                background:rgba(${hue},${0.5 + Math.random() * 0.4});
                box-shadow:0 0 ${size * 2}px rgba(${hue},0.6);
                animation-duration:${0.4 + Math.random() * 0.4}s;
            `;
            document.body.appendChild(dot);
            dot.addEventListener('animationend', () => dot.remove());
        }

        // Hover state for interactive elements
        const hoverTargets = 'a, button, .btn, .service-card-item, .industry-item, .hv-card, .process-step, .testimonial-card, .tl-item, [data-cursor-hover]';

        document.querySelectorAll(hoverTargets).forEach(el => {
            el.addEventListener('mouseenter', () => {
                cursor.classList.add('cursor-hover');
                trail.classList.add('cursor-hover');
            });
            el.addEventListener('mouseleave', () => {
                cursor.classList.remove('cursor-hover');
                trail.classList.remove('cursor-hover');
            });
        });

        // Click burst
        document.addEventListener('click', e => {
            for (let i = 0; i < 6; i++) {
                setTimeout(() => {
                    const burst = document.createElement('div');
                    burst.className = 'cursor-comet';
                    const angle  = (i / 6) * Math.PI * 2;
                    const radius = 15 + Math.random() * 20;
                    const bx     = e.clientX + Math.cos(angle) * radius;
                    const by     = e.clientY + Math.sin(angle) * radius;
                    const hue    = i % 2 === 0 ? '224,37,26' : '0,212,255';
                    burst.style.cssText = `
                        width:4px;height:4px;
                        left:${bx}px;top:${by}px;
                        background:rgba(${hue},0.9);
                        box-shadow:0 0 8px rgba(${hue},0.7);
                        animation-duration:0.5s;
                    `;
                    document.body.appendChild(burst);
                    burst.addEventListener('animationend', () => burst.remove());
                }, i * 30);
            }
        });

        // Button ripple
        document.querySelectorAll('.btn').forEach(btn => {
            btn.addEventListener('click', function (e) {
                const rect   = btn.getBoundingClientRect();
                const ripple = document.createElement('span');
                ripple.className = 'btn-ripple';
                const size = Math.max(rect.width, rect.height);
                ripple.style.cssText = `
                    width:${size}px;height:${size}px;
                    left:${e.clientX - rect.left - size / 2}px;
                    top:${e.clientY - rect.top - size / 2}px;
                `;
                btn.appendChild(ripple);
                ripple.addEventListener('animationend', () => ripple.remove());
            });
        });
    }

    /* ══════════════════════════════════════════════════════
       3. NETWORK / NODE CANVAS — algo graph background
       ══════════════════════════════════════════════════════ */
    function initNetworkCanvas() {
        const canvas = document.getElementById('network-canvas');
        if (!canvas) return;
        const ctx = canvas.getContext('2d');

        let W, H, nodes, animFrame;

        const NODE_COUNT = 55;
        const MAX_DIST   = 160;
        const COLORS     = [
            'rgba(224,37,26,',
            'rgba(0,212,255,',
            'rgba(123,94,167,',
            'rgba(255,183,71,',
        ];

        function resize() {
            W = canvas.width  = window.innerWidth;
            H = canvas.height = window.innerHeight;
        }

        function createNodes() {
            nodes = Array.from({ length: NODE_COUNT }, () => ({
                x:    Math.random() * W,
                y:    Math.random() * H,
                vx:   (Math.random() - 0.5) * 0.35,
                vy:   (Math.random() - 0.5) * 0.35,
                r:    Math.random() * 2 + 1,
                color: COLORS[Math.floor(Math.random() * COLORS.length)],
                pulse: Math.random() * Math.PI * 2,
            }));
        }

        function draw() {
            ctx.clearRect(0, 0, W, H);

            // Update + draw nodes
            nodes.forEach(n => {
                n.x += n.vx;
                n.y += n.vy;
                n.pulse += 0.02;

                if (n.x < 0 || n.x > W) n.vx *= -1;
                if (n.y < 0 || n.y > H) n.vy *= -1;

                const glow = 0.6 + Math.sin(n.pulse) * 0.4;
                ctx.beginPath();
                ctx.arc(n.x, n.y, n.r * glow, 0, Math.PI * 2);
                ctx.fillStyle = n.color + glow + ')';
                ctx.fill();
            });

            // Draw edges
            for (let i = 0; i < nodes.length; i++) {
                for (let j = i + 1; j < nodes.length; j++) {
                    const a = nodes[i], b = nodes[j];
                    const dx = a.x - b.x, dy = a.y - b.y;
                    const dist = Math.sqrt(dx * dx + dy * dy);
                    if (dist < MAX_DIST) {
                        const alpha = (1 - dist / MAX_DIST) * 0.35;
                        ctx.beginPath();
                        ctx.moveTo(a.x, a.y);
                        ctx.lineTo(b.x, b.y);
                        ctx.strokeStyle = `rgba(40, 44, 70, ${alpha})`;
                        ctx.lineWidth = 0.8;
                        ctx.stroke();
                    }
                }
            }

            animFrame = requestAnimationFrame(draw);
        }

        resize();
        createNodes();
        draw();

        window.addEventListener('resize', () => {
            resize();
            createNodes();
        });
    }

    /* ══════════════════════════════════════════════════════
       4. SCROLL REVEAL — IntersectionObserver
       ══════════════════════════════════════════════════════ */
    function initScrollReveal() {
        if (!('IntersectionObserver' in window)) {
            // Fallback: just show everything
            document.querySelectorAll('[data-reveal], [data-stagger]').forEach(el => {
                el.classList.add('revealed');
            });
            return;
        }

        const io = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('revealed');
                    io.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.12,
            rootMargin: '0px 0px -40px 0px'
        });

        document.querySelectorAll('[data-reveal], [data-stagger]').forEach(el => {
            io.observe(el);
        });
    }

    /* ══════════════════════════════════════════════════════
       5. AUTO-TAG PAGE SECTIONS WITH REVEAL ATTRIBUTES
         (so you don't have to edit every Blade template)
       ══════════════════════════════════════════════════════ */
    function autoTagRevealTargets() {

        // Section headings
        document.querySelectorAll('.section-head-center, .section-head, .text-two-col > div').forEach((el, i) => {
            if (!el.hasAttribute('data-reveal')) {
                el.setAttribute('data-reveal', i % 2 === 0 ? 'fade-up' : 'fade-up');
            }
        });

        // h2 elements — add glitch class
        document.querySelectorAll('h2').forEach(el => {
            el.classList.add('glitch-ready');
            el.dataset.text = el.textContent;
        });

        // Grids — stagger children
        const staggerSelectors = [
            '.service-grid',
            '.industry-grid',
            '.process-steps',
            '.why-list',
            '.grid.cols-2',
            '.grid.cols-3',
            '.exp-numbers',
            '.badge-row',
            '.partners-logos',
            '.trust-grid',
            '.review-badges',
        ];
        staggerSelectors.forEach(sel => {
            document.querySelectorAll(sel).forEach(el => {
                if (!el.hasAttribute('data-stagger')) {
                    el.setAttribute('data-stagger', '');
                    el.setAttribute('data-reveal', 'fade-up');
                }
            });
        });

        // Individual cards & items — fade-up
        const fadeSelectors = [
            '.service-card-item',
            '.process-step',
            '.industry-item',
            '.testimonial-card',
            '.trust-card',
            '.location-card',
            '.exp-num-card',
            '.hv-card',
            '.logo-strip',
            '.case-study-card',
        ];
        fadeSelectors.forEach(sel => {
            document.querySelectorAll(sel).forEach((el, i) => {
                if (!el.hasAttribute('data-reveal')) {
                    el.setAttribute('data-reveal', 'fade-up');
                    el.style.transitionDelay = (i % 4) * 0.08 + 's';
                }
            });
        });

        // Left-right alternating reveals for two-col layouts
        document.querySelectorAll('.text-two-col > *:first-child').forEach(el => {
            if (!el.hasAttribute('data-reveal')) el.setAttribute('data-reveal', 'fade-right');
        });
        document.querySelectorAll('.text-two-col > *:last-child').forEach(el => {
            if (!el.hasAttribute('data-reveal')) el.setAttribute('data-reveal', 'fade-left');
        });

        // Why grid
        document.querySelectorAll('.why-grid > *:first-child').forEach(el => {
            el.setAttribute('data-reveal', 'fade-right');
        });
        document.querySelectorAll('.why-grid > *:last-child').forEach(el => {
            el.setAttribute('data-reveal', 'fade-left');
        });

        // Contact grid
        document.querySelectorAll('.contact-section-grid > *').forEach((el, i) => {
            el.setAttribute('data-reveal', i === 0 ? 'fade-right' : 'fade-left');
        });

        // Hero elements already have CSS animations — skip
        // Logo strip
        document.querySelectorAll('.logo-strip').forEach(el => {
            el.setAttribute('data-reveal', 'fade-up');
        });

        // Tag labels
        document.querySelectorAll('.tag-label').forEach(el => {
            el.setAttribute('data-reveal', 'zoom-in');
        });
    }

    /* ══════════════════════════════════════════════════════
       6. GLITCH EFFECT on h2 hover
       ══════════════════════════════════════════════════════ */
    function initGlitch() {
        document.querySelectorAll('h2.glitch-ready').forEach(h2 => {
            let glitchTimeout;
            h2.addEventListener('mouseenter', () => {
                h2.classList.add('glitching');
                glitchTimeout = setTimeout(() => h2.classList.remove('glitching'), 350);
            });
            h2.addEventListener('mouseleave', () => {
                clearTimeout(glitchTimeout);
                h2.classList.remove('glitching');
            });
        });
    }

    /* ══════════════════════════════════════════════════════
       7. PARALLAX — subtle scroll parallax on hero orbs
       ══════════════════════════════════════════════════════ */
    function initParallax() {
        const orbs = document.querySelectorAll('.hero-orb, .cosmos-nebula');
        if (!orbs.length) return;

        let ticking = false;
        window.addEventListener('scroll', () => {
            if (!ticking) {
                requestAnimationFrame(() => {
                    const sy = window.scrollY;
                    orbs.forEach((orb, i) => {
                        const speed = 0.04 + i * 0.015;
                        orb.style.transform = `translateY(${sy * speed}px)`;
                    });
                    ticking = false;
                });
                ticking = true;
            }
        });
    }

    /* ══════════════════════════════════════════════════════
       8. COUNTER ANIMATION — stats numbers count up
       ══════════════════════════════════════════════════════ */
    function initCounters() {
        const counterEls = document.querySelectorAll('.num, .hv-card-num');

        const counterObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (!entry.isIntersecting) return;
                counterObserver.unobserve(entry.target);

                const el  = entry.target;
                const raw = el.textContent.trim();
                const num = parseFloat(raw.replace(/[^0-9.]/g, ''));
                const suffix = raw.replace(/[0-9.]/g, '');
                if (isNaN(num)) return;

                const duration = 1600;
                const start    = performance.now();

                function step(now) {
                    const progress = Math.min((now - start) / duration, 1);
                    const eased    = 1 - Math.pow(1 - progress, 3); // ease-out-cubic
                    el.textContent = Math.round(eased * num) + suffix;
                    if (progress < 1) requestAnimationFrame(step);
                }
                requestAnimationFrame(step);
            });
        }, { threshold: 0.5 });

        counterEls.forEach(el => counterObserver.observe(el));
    }

    /* ══════════════════════════════════════════════════════
       9. MAGNETIC BUTTONS — cards & buttons subtly attract cursor
       ══════════════════════════════════════════════════════ */
    function initMagneticElements() {
        if (window.matchMedia('(max-width: 768px)').matches) return;

        document.querySelectorAll('.btn-primary, .btn-ghost').forEach(btn => {
            btn.addEventListener('mousemove', e => {
                const rect = btn.getBoundingClientRect();
                const cx   = rect.left + rect.width  / 2;
                const cy   = rect.top  + rect.height / 2;
                const dx   = (e.clientX - cx) * 0.22;
                const dy   = (e.clientY - cy) * 0.22;
                btn.style.transform = `translate(${dx}px, ${dy}px) translateY(-2px)`;
            });
            btn.addEventListener('mouseleave', () => {
                btn.style.transform = '';
            });
        });
    }

    /* ══════════════════════════════════════════════════════
       10. NAVBAR SCROLL STATE
       ══════════════════════════════════════════════════════ */
    function initNavbar() {
        const header = document.querySelector('.site-header');
        if (!header) return;

        function onScroll() {
            header.classList.toggle('scrolled', window.scrollY > 40);
        }
        window.addEventListener('scroll', onScroll, { passive: true });
        onScroll();
    }

    /* ══════════════════════════════════════════════════════
       11. SECTION GLOW — active section tints the bg orbs
       ══════════════════════════════════════════════════════ */
    function initSectionGlow() {
        const sections   = document.querySelectorAll('section[class]');
        const nebula1    = document.querySelector('.cosmos-nebula-1');
        const nebula2    = document.querySelector('.cosmos-nebula-2');
        if (!nebula1 || !nebula2) return;

        const sectionObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (!entry.isIntersecting) return;
                const isAlt = entry.target.classList.contains('section-alt');
                nebula1.style.opacity = isAlt ? '0.16' : '0.10';
                nebula2.style.opacity = isAlt ? '0.10' : '0.14';
            });
        }, { threshold: 0.3 });

        sections.forEach(s => sectionObserver.observe(s));
    }

    /* ══════════════════════════════════════════════════════
       12. CONSTELLATION LINES — SVG overlay on hero
       ══════════════════════════════════════════════════════ */
    function initConstellationHero() {
        const hero = document.querySelector('.hero-bg');
        if (!hero) return;

        const svg = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
        svg.style.cssText = 'position:absolute;inset:0;width:100%;height:100%;pointer-events:none;opacity:0.15;';
        svg.setAttribute('aria-hidden', 'true');

        const points = [
            [15, 20], [30, 10], [45, 30], [60, 15], [75, 25],
            [20, 45], [35, 60], [50, 50], [65, 65], [80, 40],
            [10, 70], [25, 80], [55, 75], [70, 85], [90, 60],
        ];

        // Draw constellation lines
        const edges = [
            [0,1],[1,2],[2,3],[3,4],[0,5],[5,6],[6,7],[7,8],[8,9],
            [5,10],[10,11],[11,12],[12,13],[13,14],[9,14],[4,9],[2,7],
        ];

        edges.forEach(([a, b]) => {
            const line = document.createElementNS('http://www.w3.org/2000/svg', 'line');
            line.setAttribute('x1', points[a][0] + '%');
            line.setAttribute('y1', points[a][1] + '%');
            line.setAttribute('x2', points[b][0] + '%');
            line.setAttribute('y2', points[b][1] + '%');
            line.setAttribute('stroke', 'rgba(0,212,255,0.6)');
            line.setAttribute('stroke-width', '0.5');
            svg.appendChild(line);
        });

        // Draw stars at each point
        points.forEach(([x, y], i) => {
            const circle = document.createElementNS('http://www.w3.org/2000/svg', 'circle');
            circle.setAttribute('cx', x + '%');
            circle.setAttribute('cy', y + '%');
            circle.setAttribute('r', i % 4 === 0 ? '2' : '1.2');
            circle.setAttribute('fill', i % 3 === 0 ? 'rgba(224,37,26,0.8)' : 'rgba(0,212,255,0.7)');
            svg.appendChild(circle);
        });

        hero.appendChild(svg);
    }

    /* ══════════════════════════════════════════════════════
       13. TILT EFFECT — service and testimonial cards
       ══════════════════════════════════════════════════════ */
    function initTiltCards() {
        if (window.matchMedia('(max-width: 768px)').matches) return;

        const tiltTargets = document.querySelectorAll(
            '.service-card-item, .testimonial-card, .exp-num-card, .process-step'
        );

        tiltTargets.forEach(card => {
            card.addEventListener('mousemove', e => {
                const rect = card.getBoundingClientRect();
                const cx   = rect.left + rect.width  / 2;
                const cy   = rect.top  + rect.height / 2;
                const dx   = (e.clientX - cx) / (rect.width  / 2);
                const dy   = (e.clientY - cy) / (rect.height / 2);
                const rotX = dy * -6;
                const rotY = dx *  6;
                card.style.transform = `perspective(600px) rotateX(${rotX}deg) rotateY(${rotY}deg) translateY(-4px) scale(1.02)`;
                card.style.boxShadow = `${-dx * 10}px ${-dy * 10}px 30px rgba(0,0,0,0.3), 0 0 20px rgba(224,37,26,0.1)`;
            });

            card.addEventListener('mouseleave', () => {
                card.style.transform = '';
                card.style.boxShadow = '';
            });
        });
    }

    /* ══════════════════════════════════════════════════════
       14. BRAND LOGO — particle explosion on hover
       ══════════════════════════════════════════════════════ */
    function initBrandHover() {
        const brand = document.querySelector('.brand');
        if (!brand) return;

        brand.addEventListener('mouseenter', () => {
            const rect = brand.getBoundingClientRect();
            for (let i = 0; i < 12; i++) {
                setTimeout(() => {
                    const p = document.createElement('div');
                    p.className = 'cursor-comet';
                    const angle = (i / 12) * Math.PI * 2;
                    const r     = 20 + Math.random() * 30;
                    p.style.cssText = `
                        width:3px;height:3px;
                        left:${rect.left + rect.width/2 + Math.cos(angle)*r}px;
                        top:${rect.top + rect.height/2 + Math.sin(angle)*r}px;
                        background:rgba(224,37,26,0.9);
                        box-shadow:0 0 8px rgba(224,37,26,0.7);
                        animation-duration:0.7s;
                    `;
                    document.body.appendChild(p);
                    p.addEventListener('animationend', () => p.remove());
                }, i * 25);
            }
        });
    }

    /* ══════════════════════════════════════════════════════
       15. SCROLL PROGRESS BAR
       ══════════════════════════════════════════════════════ */
    function initScrollProgress() {
        const bar = document.createElement('div');
        bar.style.cssText = `
            position:fixed;top:0;left:0;height:2px;width:0%;
            background:linear-gradient(90deg,var(--brand),#00d4ff,var(--brand));
            background-size:200% 100%;
            z-index:99999;pointer-events:none;
            transition:width 0.1s linear;
            animation:progressShimmer 2s linear infinite;
        `;
        document.head.insertAdjacentHTML('beforeend', `
            <style>
                @keyframes progressShimmer {
                    0%   { background-position: 0% 50%; }
                    100% { background-position: 200% 50%; }
                }
            </style>
        `);
        document.body.appendChild(bar);

        window.addEventListener('scroll', () => {
            const scrolled = window.scrollY;
            const total    = document.body.scrollHeight - window.innerHeight;
            bar.style.width = (scrolled / total * 100) + '%';
        }, { passive: true });
    }

    /* ══════════════════════════════════════════════════════
       16. INIT ALL
       ══════════════════════════════════════════════════════ */
    function init() {
        injectBackgroundElements();
        autoTagRevealTargets();

        // Defer heavier inits slightly to not block first paint
        requestAnimationFrame(() => {
            initCursor();
            initNetworkCanvas();
            initScrollReveal();
            initGlitch();
            initParallax();
            initCounters();
            initMagneticElements();
            initNavbar();
            initSectionGlow();
            initConstellationHero();
            initTiltCards();
            initBrandHover();
            initScrollProgress();
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }

})();
