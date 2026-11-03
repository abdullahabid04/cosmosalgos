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
        if (document.getElementById('cosmos-bg')) return;

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

        // Keep the fixed layers in a deterministic paint order.
        const grid = document.createElement('div');
        grid.id = 'algo-grid';
        bg.after(grid);

        const canvas = document.createElement('canvas');
        canvas.id = 'network-canvas';
        grid.after(canvas);
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
        const hoverTargets = 'a, button, .btn, .service-card-item, .industry-item, .hv-card, .process-step, .testimonial-card, .treatment-card, .approach-card, .trust-card, .case-study-card, .tl-item, [data-cursor-hover]';

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
        if (canvas.dataset.cosmosReady === 'true') return;
        canvas.dataset.cosmosReady = 'true';
        const ctx = canvas.getContext('2d');
        if (!ctx) return;

        let W, H, nodes, animFrame;
        let running = true;

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
            if (!running) return;
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
                        ctx.strokeStyle = `rgba(120, 160, 220, ${alpha})`;
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

        let resizeTimer;
        window.addEventListener('resize', () => {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(() => {
                resize();
                createNodes();
            }, 120);
        }, { passive: true });

        document.addEventListener('visibilitychange', () => {
            running = !document.hidden;
            if (running) {
                animFrame = requestAnimationFrame(draw);
            }
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
       8. HERO COSMOS — canvas starfield, planets, orbits,
          asteroids, meteors and impact rings
       ══════════════════════════════════════════════════════ */
    function initHeroCosmos() {
        const canvas = document.querySelector('.hero-cosmos-canvas');
        const hero   = document.querySelector('.hero-home');

        if (!canvas || !hero || canvas.dataset.cosmosReady === 'true') return;

        const ctx = canvas.getContext('2d');
        if (!ctx) return;

        canvas.dataset.cosmosReady = 'true';

        const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
        const finePointer  = window.matchMedia('(hover: hover) and (pointer: fine)').matches;

        let W = 0;
        let H = 0;
        let dpr = 1;
        let rafId = null;
        let running = false;
        let lastTime = 0;
        let nextMeteorAt = 0;
        let nextImpactAt = 0;
        let pointerX = 0;
        let pointerY = 0;
        let targetPointerX = 0;
        let targetPointerY = 0;

        const startedAt = performance.now();
        let stars = [];
        let brightStars = [];
        let asteroids = [];
        let meteors = [];
        let impacts = [];
        let planets = [];

        const rand = (min, max) => min + Math.random() * (max - min);

        function makeScene() {
            const starCount = Math.max(90, Math.min(220, Math.round((W * H) / 9000)));

            stars = Array.from({ length: starCount }, () => ({
                x: Math.random(),
                y: Math.random(),
                r: rand(0.35, 1.15),
                a: rand(0.18, 0.68),
                tw: rand(0.5, 2.4),
                ph: rand(0, Math.PI * 2),
                depth: rand(0.2, 1),
                color: Math.random() < 0.12 ? 'gold' : (Math.random() < 0.18 ? 'cyan' : 'white'),
            }));

            brightStars = Array.from({ length: 10 }, () => ({
                x: Math.random(),
                y: Math.random(),
                r: rand(1.2, 2.1),
                a: rand(0.45, 0.9),
                tw: rand(0.4, 1.2),
                ph: rand(0, Math.PI * 2),
                depth: rand(0.6, 1),
            }));

            asteroids = Array.from({ length: 7 }, () => ({
                x: Math.random(),
                y: Math.random(),
                r: rand(1.2, 3.2),
                a: rand(0.18, 0.4),
                vx: rand(-0.0035, 0.0035),
                vy: rand(0.001, 0.004),
                rot: rand(0, Math.PI * 2),
                vr: rand(-0.25, 0.25),
                shape: Array.from({ length: 7 }, () => rand(0.65, 1.15)),
            }));

            planets = [
                {
                    x: 0.82, y: 0.28, r: 0.075, hue: 'red', depth: 0.5,
                    moon: { angle: rand(0, Math.PI * 2), speed: 0.18, dist: 1.55, r: 0.16 },
                },
                {
                    x: 0.15, y: 0.78, r: 0.032, hue: 'cyan', depth: 0.7,
                    orbit: {
                        cx: 0.78, cy: 0.48, rx: 0.24, ry: 0.16,
                        angle: rand(0, Math.PI * 2), speed: 0.055,
                    },
                },
                { x: 0.62, y: 0.12, r: 0.016, hue: 'gold', depth: 0.4, orbit: null },
            ];

            meteors = [];
            impacts = [];
            nextMeteorAt = startedAt + rand(2200, 4500);
            nextImpactAt = startedAt + rand(5000, 8500);
        }

        function resize() {
            const rect = hero.getBoundingClientRect();
            W = Math.max(1, Math.round(rect.width));
            H = Math.max(1, Math.round(rect.height));
            dpr = Math.min(window.devicePixelRatio || 1, 2);

            canvas.width = Math.round(W * dpr);
            canvas.height = Math.round(H * dpr);
            ctx.setTransform(dpr, 0, 0, dpr, 0, 0);

            makeScene();
            draw(performance.now(), true, 0);
        }

        function parallax(x, y, depth) {
            return [
                x * W + pointerX * depth * 18,
                y * H + pointerY * depth * 12,
            ];
        }

        function starColor(kind, alpha) {
            if (kind === 'gold') return `rgba(255, 199, 122, ${alpha})`;
            if (kind === 'cyan') return `rgba(150, 235, 255, ${alpha})`;
            return `rgba(255, 255, 255, ${alpha})`;
        }

        function drawPlanet(x, y, radius, hue) {
            const glowColor = hue === 'red'
                ? 'rgba(224, 37, 26, .42)'
                : (hue === 'cyan' ? 'rgba(0, 212, 255, .35)' : 'rgba(255, 183, 71, .35)');

            ctx.save();
            ctx.shadowColor = glowColor;
            ctx.shadowBlur = radius * 1.8;

            const grad = ctx.createRadialGradient(
                x - radius * 0.38, y - radius * 0.42, radius * 0.08,
                x, y, radius
            );

            if (hue === 'red') {
                grad.addColorStop(0, 'rgba(255, 154, 130, .95)');
                grad.addColorStop(0.32, 'rgba(224, 37, 26, .9)');
                grad.addColorStop(0.72, 'rgba(92, 23, 19, .92)');
                grad.addColorStop(1, 'rgba(13, 15, 22, .98)');
            } else if (hue === 'cyan') {
                grad.addColorStop(0, 'rgba(188, 248, 255, .95)');
                grad.addColorStop(0.38, 'rgba(0, 212, 255, .82)');
                grad.addColorStop(0.78, 'rgba(9, 72, 91, .9)');
                grad.addColorStop(1, 'rgba(10, 15, 22, .98)');
            } else {
                grad.addColorStop(0, 'rgba(255, 235, 190, .95)');
                grad.addColorStop(0.42, 'rgba(255, 183, 71, .82)');
                grad.addColorStop(0.8, 'rgba(91, 57, 20, .9)');
                grad.addColorStop(1, 'rgba(15, 15, 18, .98)');
            }

            ctx.fillStyle = grad;
            ctx.beginPath();
            ctx.arc(x, y, radius, 0, Math.PI * 2);
            ctx.fill();
            ctx.restore();
        }

        function drawOrbit(cx, cy, rx, ry) {
            ctx.save();
            ctx.strokeStyle = 'rgba(150, 205, 235, .13)';
            ctx.lineWidth = 1;
            ctx.setLineDash([2, 6]);
            ctx.beginPath();
            ctx.ellipse(cx, cy, rx, ry, 0, 0, Math.PI * 2);
            ctx.stroke();
            ctx.restore();
        }

        function addImpact(x, y, strength) {
            impacts.push({
                x, y,
                life: 1,
                maxLife: 1,
                radius: 2,
                maxRadius: strength * 30,
            });
        }

        function draw(now, staticFrame, dt) {
            const t = (now - startedAt) / 1000;

            if (!staticFrame) {
                pointerX += (targetPointerX - pointerX) * 0.04;
                pointerY += (targetPointerY - pointerY) * 0.04;
            }

            ctx.clearRect(0, 0, W, H);

            // Distant stars
            ctx.save();
            ctx.globalCompositeOperation = 'lighter';
            stars.forEach((star) => {
                const [x, y] = parallax(star.x, star.y, star.depth);
                const twinkle = 0.55 + 0.45 * Math.sin(t * star.tw + star.ph);
                const alpha = star.a * twinkle;
                ctx.fillStyle = starColor(star.color, alpha);
                ctx.beginPath();
                ctx.arc(x, y, star.r, 0, Math.PI * 2);
                ctx.fill();
            });

            brightStars.forEach((star) => {
                const [x, y] = parallax(star.x, star.y, star.depth);
                const twinkle = 0.6 + 0.4 * Math.sin(t * star.tw + star.ph);
                ctx.fillStyle = `rgba(255, 255, 255, ${star.a * twinkle})`;
                ctx.shadowColor = 'rgba(190, 235, 255, .8)';
                ctx.shadowBlur = 8;
                ctx.beginPath();
                ctx.arc(x, y, star.r, 0, Math.PI * 2);
                ctx.fill();
                ctx.shadowBlur = 0;
            });
            ctx.restore();

            // Orbital paths
            planets.forEach((planet) => {
                if (!planet.orbit) return;
                const [cx, cy] = parallax(planet.orbit.cx, planet.orbit.cy, planet.depth);
                drawOrbit(cx, cy, planet.orbit.rx * W, planet.orbit.ry * H);
            });

            // Asteroids
            if (!staticFrame) {
                asteroids.forEach((rock) => {
                    rock.x += rock.vx * dt;
                    rock.y += rock.vy * dt;
                    rock.rot += rock.vr * dt;

                    if (rock.x < -0.05) rock.x = 1.05;
                    if (rock.x > 1.05) rock.x = -0.05;
                    if (rock.y > 1.05) rock.y = -0.05;
                });
            }

            asteroids.forEach((rock) => {
                const [x, y] = parallax(rock.x, rock.y, 0.8);
                const r = rock.r;
                ctx.save();
                ctx.translate(x, y);
                ctx.rotate(rock.rot);
                ctx.beginPath();
                rock.shape.forEach((scale, i) => {
                    const angle = (i / rock.shape.length) * Math.PI * 2;
                    const px = Math.cos(angle) * r * scale;
                    const py = Math.sin(angle) * r * scale;
                    if (i === 0) ctx.moveTo(px, py);
                    else ctx.lineTo(px, py);
                });
                ctx.closePath();
                ctx.fillStyle = `rgba(180, 190, 205, ${rock.a})`;
                ctx.fill();
                ctx.strokeStyle = 'rgba(255, 255, 255, .08)';
                ctx.lineWidth = 0.7;
                ctx.stroke();
                ctx.restore();
            });

            // Planets
            planets.forEach((planet) => {
                let x = planet.x;
                let y = planet.y;

                if (planet.orbit) {
                    const angle = planet.orbit.angle + t * planet.orbit.speed;
                    x = planet.orbit.cx + Math.cos(angle) * planet.orbit.rx;
                    y = planet.orbit.cy + Math.sin(angle) * planet.orbit.ry;
                }

                const [px, py] = parallax(x, y, planet.depth);
                const radius = Math.max(5, planet.r * Math.min(W, H));

                drawPlanet(px, py, radius, planet.hue);

                if (planet.hue === 'red') {
                    // Subtle ring around the large planet
                    ctx.save();
                    ctx.translate(px, py);
                    ctx.rotate(-0.32);
                    ctx.scale(1, 0.34);
                    ctx.strokeStyle = 'rgba(255, 199, 160, .22)';
                    ctx.lineWidth = 2;
                    ctx.beginPath();
                    ctx.arc(0, 0, radius * 1.55, 0, Math.PI * 2);
                    ctx.stroke();
                    ctx.strokeStyle = 'rgba(224, 37, 26, .2)';
                    ctx.lineWidth = 1;
                    ctx.beginPath();
                    ctx.arc(0, 0, radius * 1.78, 0, Math.PI * 2);
                    ctx.stroke();
                    ctx.restore();

                    // Moon
                    const moonAngle = planet.moon.angle + t * planet.moon.speed;
                    const moonX = px + Math.cos(moonAngle) * radius * planet.moon.dist;
                    const moonY = py + Math.sin(moonAngle) * radius * planet.moon.dist * 0.42;
                    ctx.fillStyle = 'rgba(210, 220, 235, .72)';
                    ctx.beginPath();
                    ctx.arc(moonX, moonY, Math.max(1.5, radius * planet.moon.r), 0, Math.PI * 2);
                    ctx.fill();
                }
            });

            // Meteors
            if (!staticFrame && now >= nextMeteorAt) {
                const fromLeft = Math.random() > 0.35;
                const speed = rand(0.32, 0.55);
                meteors.push({
                    x: fromLeft ? rand(0.05, 0.5) : rand(0.5, 0.95),
                    y: rand(0.02, 0.36),
                    vx: fromLeft ? speed : -speed,
                    vy: rand(0.16, 0.3),
                    life: 1,
                    maxLife: 1,
                    length: rand(0.1, 0.18),
                });
                nextMeteorAt = now + rand(5200, 9800);
            }

            meteors = meteors.filter((meteor) => {
                if (!staticFrame) {
                    meteor.x += meteor.vx * dt;
                    meteor.y += meteor.vy * dt;
                    meteor.life -= dt;
                }

                const headX = meteor.x * W;
                const headY = meteor.y * H;
                const tailX = (meteor.x - meteor.vx * meteor.length) * W;
                const tailY = (meteor.y - meteor.vy * meteor.length) * H;
                const alpha = Math.max(0, meteor.life / meteor.maxLife);

                const streak = ctx.createLinearGradient(headX, headY, tailX, tailY);
                streak.addColorStop(0, `rgba(255, 255, 255, ${0.85 * alpha})`);
                streak.addColorStop(0.4, `rgba(255, 206, 160, ${0.45 * alpha})`);
                streak.addColorStop(1, 'rgba(255, 255, 255, 0)');
                ctx.save();
                ctx.strokeStyle = streak;
                ctx.lineWidth = 1.6;
                ctx.beginPath();
                ctx.moveTo(headX, headY);
                ctx.lineTo(tailX, tailY);
                ctx.stroke();
                ctx.restore();

                if (meteor.life <= 0) {
                    addImpact(meteor.x, meteor.y, 1);
                    return false;
                }
                return true;
            });

            // Occasional particle impacts
            if (!staticFrame && now >= nextImpactAt) {
                addImpact(rand(0.42, 0.96), rand(0.12, 0.88), rand(0.45, 0.9));
                nextImpactAt = now + rand(6500, 12000);
            }

            impacts = impacts.filter((impact) => {
                if (!staticFrame) impact.life -= dt * 0.85;
                const progress = 1 - Math.max(0, impact.life / impact.maxLife);
                const alpha = Math.max(0, impact.life / impact.maxLife);
                const radius = impact.radius + progress * impact.maxRadius;

                ctx.save();
                ctx.strokeStyle = `rgba(255, 210, 170, ${alpha * 0.4})`;
                ctx.lineWidth = 1;
                ctx.beginPath();
                ctx.arc(impact.x * W, impact.y * H, radius, 0, Math.PI * 2);
                ctx.stroke();

                ctx.fillStyle = `rgba(255, 240, 210, ${alpha * 0.55})`;
                ctx.beginPath();
                ctx.arc(impact.x * W, impact.y * H, Math.max(0.6, 2.2 * alpha), 0, Math.PI * 2);
                ctx.fill();
                ctx.restore();

                return impact.life > 0;
            });
        }

        function frame(now) {
            if (!running) return;
            const dt = lastTime ? Math.min((now - lastTime) / 1000, 0.05) : 0;
            lastTime = now;
            draw(now, false, dt);
            rafId = requestAnimationFrame(frame);
        }

        function start() {
            if (reduceMotion || running) return;
            running = true;
            lastTime = performance.now();
            rafId = requestAnimationFrame(frame);
        }

        function stop() {
            running = false;
            if (rafId !== null) {
                cancelAnimationFrame(rafId);
                rafId = null;
            }
        }

        if (finePointer && !reduceMotion) {
            window.addEventListener('mousemove', (event) => {
                targetPointerX = (event.clientX / Math.max(1, window.innerWidth) - 0.5) * 2;
                targetPointerY = (event.clientY / Math.max(1, window.innerHeight) - 0.5) * 2;
            }, { passive: true });
        }

        let resizeTimer;
        window.addEventListener('resize', () => {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(() => {
                resize();
                if (reduceMotion) draw(performance.now(), true, 0);
            }, 120);
        }, { passive: true });

        document.addEventListener('visibilitychange', () => {
            if (document.hidden) stop();
            else if (!reduceMotion) start();
        });

        if ('IntersectionObserver' in window && !reduceMotion) {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting && !document.hidden) start();
                    else stop();
                });
            }, { threshold: 0 });

            observer.observe(hero);
        }

        resize();

        if (reduceMotion) {
            draw(performance.now(), true, 0);
        } else {
            start();
        }
    }

    /* ══════════════════════════════════════════════════════
       9. COUNTER ANIMATION — stats numbers count up
       ══════════════════════════════════════════════════════ */
    function initCounters() {
        const counterEls = document.querySelectorAll('.num, .hv-card-num');

        const counterObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (!entry.isIntersecting) return;
                counterObserver.unobserve(entry.target);

                const el  = entry.target;
                const raw = el.textContent.trim();
                const targetValue = el.dataset.target !== undefined
                    ? parseFloat(el.dataset.target)
                    : parseFloat(raw.replace(/[^0-9.]/g, ''));
                const suffix = el.dataset.suffix !== undefined
                    ? el.dataset.suffix
                    : raw.replace(/[0-9.]/g, '');
                if (isNaN(targetValue)) return;

                const duration = 1600;
                const start    = performance.now();

                function step(now) {
                    const progress = Math.min((now - start) / duration, 1);
                    const eased    = 1 - Math.pow(1 - progress, 3); // ease-out-cubic
                    el.textContent = Math.round(eased * targetValue) + suffix;
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
            '.service-card-item, .testimonial-card, .exp-num-card, .process-step, .approach-card, .trust-card'
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
        if (window.__cosmosInit) return;
        window.__cosmosInit = true;

        const features = [
            injectBackgroundElements,
            autoTagRevealTargets,
            initCursor,
            initNetworkCanvas,
            initHeroCosmos,
            initScrollReveal,
            initGlitch,
            initParallax,
            initCounters,
            initMagneticElements,
            initNavbar,
            initSectionGlow,
            initConstellationHero,
            initTiltCards,
            initBrandHover,
            initScrollProgress,
        ];

        features.forEach((feature) => {
            try {
                feature();
            } catch (error) {
                console.warn(`[Cosmos] ${feature.name} failed`, error);
            }
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }

})();
