document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('.form-card');
    if (form) {
        const btn = form.querySelector('button[type="button"]');
        btn.addEventListener('click', function () {
            const name = form.querySelector('input[placeholder="Nombre y empresa"]').value.trim();
            const contact = form.querySelector('input[placeholder="Correo / WhatsApp"]').value.trim();
            const message = form.querySelector('textarea').value.trim();

            if (!name || !contact || !message) {
                alert('Por favor completa todos los campos.');
                return;
            }

            const text = encodeURIComponent(
                `Hola SIHEM PACK, soy ${name}.\nContacto: ${contact}\n\n${message}`
            );
            window.open(`https://wa.me/5255610302964?text=${text}`, '_blank');
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
