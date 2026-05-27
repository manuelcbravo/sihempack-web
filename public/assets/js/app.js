document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('.form-card');
    if (form) {
        const btn = form.querySelector('button[type="button"]');
        btn.addEventListener('click', function () {
            const nameEl    = form.querySelector('input[placeholder="Nombre y empresa"]');
            const contactEl = form.querySelector('input[placeholder="Correo / WhatsApp"]');
            const messageEl = form.querySelector('textarea');
            const errorEl   = document.getElementById('form-error');

            const fields = [nameEl, contactEl, messageEl];
            let valid = true;

            fields.forEach(el => {
                if (!el.value.trim()) {
                    el.classList.add('field-error');
                    valid = false;
                } else {
                    el.classList.remove('field-error');
                }
            });

            if (!valid) {
                errorEl.classList.add('visible');
                return;
            }

            errorEl.classList.remove('visible');

            const text = encodeURIComponent(
                `Hola SIHEM PACK, soy ${nameEl.value.trim()}.\nContacto: ${contactEl.value.trim()}\n\n${messageEl.value.trim()}`
            );
            window.open(`https://wa.me/5255610302964?text=${text}`, '_blank');
        });

        // Limpiar error al escribir
        form.querySelectorAll('input, textarea').forEach(el => {
            el.addEventListener('input', function () {
                this.classList.remove('field-error');
                if (form.querySelectorAll('.field-error').length === 0) {
                    document.getElementById('form-error').classList.remove('visible');
                }
            });
        });
    }

    // Smooth active nav link highlight on scroll
    const sections = document.querySelectorAll('section[id], header[id]');
    const navLinks = document.querySelectorAll('.nav-links a');

    if (sections.length && navLinks.length) {
        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        navLinks.forEach((link) => {
                            link.style.color = link.getAttribute('href') === `#${entry.target.id}`
                                ? 'white'
                                : 'rgba(255,255,255,.82)';
                        });
                    }
                });
            },
            { threshold: 0.4 }
        );
        sections.forEach((s) => observer.observe(s));
    }
});
