document.addEventListener('DOMContentLoaded', () => {
    const header = document.querySelector('.site-header');
    const navWrap = document.querySelector('.header-nav-wrap');
    const navToggle = document.querySelector('.nav-toggle');

    window.addEventListener('scroll', () => {
        header?.classList.toggle('is-scrolled', window.scrollY > 20);
    });

    navToggle?.addEventListener('click', () => {
        const isOpen = navWrap?.classList.toggle('is-open');
        navToggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
    });

    document.querySelectorAll('.nav-link').forEach(link => {
        link.addEventListener('click', () => {
            navWrap?.classList.remove('is-open');
            navToggle?.setAttribute('aria-expanded', 'false');
        });
    });

    document.querySelectorAll('.alert').forEach(alert => {
        setTimeout(() => {
            alert.style.transition = 'opacity 0.4s';
            alert.style.opacity = '0';
            setTimeout(() => alert.remove(), 400);
        }, 6000);
    });

    document.querySelectorAll('[data-carousel]').forEach(carousel => {
        const slides = carousel.querySelectorAll('.projects-carousel__slide');
        const dots = carousel.querySelectorAll('.projects-carousel__dot');
        const prevBtn = carousel.querySelector('.projects-carousel__btn--prev');
        const nextBtn = carousel.querySelector('.projects-carousel__btn--next');
        let current = 0;
        let timer = null;
        const delay = 4500;

        const counter = carousel.querySelector('[data-carousel-current]');

        const goTo = (index) => {
            current = (index + slides.length) % slides.length;
            slides.forEach((slide, i) => slide.classList.toggle('is-active', i === current));
            dots.forEach((dot, i) => dot.classList.toggle('is-active', i === current));
            if (counter) counter.textContent = String(current + 1);
        };

        const next = () => goTo(current + 1);
        const prev = () => goTo(current - 1);

        const startAuto = () => {
            stopAuto();
            timer = setInterval(next, delay);
        };

        const stopAuto = () => {
            if (timer) clearInterval(timer);
        };

        prevBtn?.addEventListener('click', () => { prev(); startAuto(); });
        nextBtn?.addEventListener('click', () => { next(); startAuto(); });

        dots.forEach(dot => {
            dot.addEventListener('click', () => {
                goTo(parseInt(dot.dataset.index, 10));
                startAuto();
            });
        });

        carousel.addEventListener('mouseenter', stopAuto);
        carousel.addEventListener('mouseleave', startAuto);

        startAuto();
    });
});
