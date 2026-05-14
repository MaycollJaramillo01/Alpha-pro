document.addEventListener('DOMContentLoaded', () => {
    // Mobile Menu Toggle
    const toggleBtn = document.querySelector('.mobile-toggle');
    const overlay = document.querySelector('.mobile-menu-overlay');
    const closeBtn = document.querySelector('.menu-close');
    const body = document.body;
    const mainNav = document.getElementById('mainNav');
    const navLinks = document.querySelectorAll('.main-nav a');
    const dropdownLinks = document.querySelectorAll('.has-dropdown > a');
    const mobileMedia = window.matchMedia('(max-width: 960px)');

    const syncToggle = (isOpen) => {
        if (!toggleBtn) return;
        toggleBtn.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
    };

    const closeMenu = () => {
        body.classList.remove('nav-open');
        if (mainNav) mainNav.classList.remove('is-open');
        syncToggle(false);
        document.querySelectorAll('.has-dropdown.open').forEach(item => item.classList.remove('open'));
    };

    if (toggleBtn) {
        toggleBtn.addEventListener('click', () => {
            const isOpen = body.classList.toggle('nav-open');
            if (mainNav) mainNav.classList.toggle('is-open', isOpen);
            syncToggle(isOpen);
        });
    }
    syncToggle(body.classList.contains('nav-open'));

    if (overlay) {
        overlay.addEventListener('click', closeMenu);
    }
    if (closeBtn) {
        closeBtn.addEventListener('click', closeMenu);
    }

    if (navLinks.length) {
        navLinks.forEach(link => {
            link.addEventListener('click', (e) => {
                const isTopDropdownTrigger = !!link.closest('.has-dropdown') && !!link.parentElement && link.parentElement.classList.contains('has-dropdown');
                if (isTopDropdownTrigger && mobileMedia.matches) return;
                closeMenu();
            });
        });
    }

    // Mobile dropdown toggle
    dropdownLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            if (!mobileMedia.matches) return;
            e.preventDefault();
            const parent = link.closest('.has-dropdown');
            const isOpen = parent.classList.contains('open');
            document.querySelectorAll('.has-dropdown.open').forEach(item => item.classList.remove('open'));
            if (!isOpen) parent.classList.add('open');
        });
    });

    // FAQ Accordion
    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        question.addEventListener('click', () => {
            const isActive = item.classList.contains('active');
            
            // Close all
            faqItems.forEach(i => i.classList.remove('active'));
            
            // Toggle current
            if (!isActive) {
                item.classList.add('active');
            }
        });
    });

    // Text entrance animations (applied to all textual elements)
    const prefersReduce = window.matchMedia('(prefers-reduced-motion: reduce)');
    const textTargets = document.querySelectorAll('h1,h2,h3,h4,h5,h6,p,li,blockquote,small,label,figcaption,a,button,.btn,.badge,.eyebrow,.section-title,.overlay-note,.card-label,.stat-value,.stat-label,.meta-chip,span,strong,em');
    if (!prefersReduce.matches) {
        const textObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    textObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.15 });

        textTargets.forEach((el, idx) => {
            el.classList.add('text-animate');
            el.style.setProperty('--stagger', `${(idx % 12) * 0.04}s`);
            textObserver.observe(el);
        });
    } else {
        textTargets.forEach(el => el.classList.add('is-visible'));
    }
});
