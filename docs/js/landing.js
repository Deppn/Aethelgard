'use strict';

document.addEventListener('DOMContentLoaded', () => {
    const header = document.getElementById('siteHeader');
    const progress = document.getElementById('scrollProgress');
    const menuButton = document.getElementById('menuButton');
    const mobileMenu = document.getElementById('mobileMenu');
    const revealItems = document.querySelectorAll('.reveal');

    const updateScrollUi = () => {
        const scrollTop = window.scrollY;
        const scrollableHeight = document.documentElement.scrollHeight - window.innerHeight;
        const progressValue = scrollableHeight > 0 ? (scrollTop / scrollableHeight) * 100 : 0;

        header?.classList.toggle('scrolled', scrollTop > 20);

        if (progress) {
            progress.style.width = `${Math.min(progressValue, 100)}%`;
        }
    };

    const closeMenu = () => {
        if (!menuButton || !mobileMenu) {
            return;
        }

        menuButton.classList.remove('active');
        menuButton.setAttribute('aria-expanded', 'false');
        mobileMenu.classList.remove('open');
        mobileMenu.setAttribute('aria-hidden', 'true');
        document.body.classList.remove('menu-open');
    };

    menuButton?.addEventListener('click', () => {
        const isOpen = menuButton.classList.toggle('active');

        menuButton.setAttribute('aria-expanded', String(isOpen));
        mobileMenu?.classList.toggle('open', isOpen);
        mobileMenu?.setAttribute('aria-hidden', String(!isOpen));
        document.body.classList.toggle('menu-open', isOpen);
    });

    mobileMenu?.querySelectorAll('a').forEach((link) => {
        link.addEventListener('click', closeMenu);
    });

    window.addEventListener('resize', () => {
        if (window.innerWidth > 1100) {
            closeMenu();
        }
    });

    const observer = new IntersectionObserver(
        (entries, currentObserver) => {
            entries.forEach((entry) => {
                if (!entry.isIntersecting) {
                    return;
                }

                const delay = Number(entry.target.dataset.delay || 0);
                entry.target.style.setProperty('--reveal-delay', `${delay}ms`);
                entry.target.classList.add('is-visible');
                currentObserver.unobserve(entry.target);
            });
        },
        {
            threshold: 0.1,
            rootMargin: '0px 0px -35px',
        }
    );

    revealItems.forEach((item) => observer.observe(item));

    window.addEventListener('scroll', updateScrollUi, { passive: true });
    updateScrollUi();
});
