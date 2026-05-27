<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    {{-- SEO primario --}}
    <title>SIHEM PACK | Soluciones en Cartón Corrugado</title>
    <meta name="description" content="Fabricamos cajas, rejillas, bandejas, paneles y octavines de cartón corrugado. Entregas oportunas, calidad industrial y diseño a medida para su operación." />
    <meta name="keywords" content="cartón corrugado, cajas corrugadas, empaques industriales, rejillas cartón, bandejas corrugadas, paneles, octavines, México, Hidalgo, San Agustín Tlaxiaca" />
    <meta name="robots" content="index, follow" />

    {{-- Open Graph --}}
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="SIHEM PACK" />
    <meta property="og:title" content="SIHEM PACK | Soluciones en Cartón Corrugado" />
    <meta property="og:description" content="Fabricamos cajas, rejillas, bandejas, paneles y octavines de cartón corrugado. Entregas oportunas y calidad industrial." />
    <meta property="og:image" content="{{ asset('assets/images/sihem_pack_page_1.jpg.jpeg') }}" />

    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="SIHEM PACK | Soluciones en Cartón Corrugado" />
    <meta name="twitter:description" content="Fabricamos cajas, rejillas, bandejas, paneles y octavines de cartón corrugado." />
    <meta name="twitter:image" content="{{ asset('assets/images/sihem_pack_page_1.jpg.jpeg') }}" />

    {{-- Schema.org JSON-LD --}}
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "Organization",
        "name": "SIHEM PACK",
        "description": "Soluciones en empaques de cartón corrugado",
        "url": "{{ url('/') }}",
        "logo": "{{ asset('assets/images/logo.png') }}",
        "address": {
            "@@type": "PostalAddress",
            "streetAddress": "Pedro Vargas 3G Lote 6 S/N",
            "addressLocality": "San Agustín Tlaxiaca",
            "addressRegion": "Hidalgo",
            "postalCode": "42171",
            "addressCountry": "MX"
        },
        "telephone": ["+525556103029", "+527715570973"],
        "email": "contacto@sihempack.com"
    }
    </script>

    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}" />
</head>

<body>
    <header class="hero pattern">
        <nav class="container">
            <a class="brand" href="#inicio" aria-label="SIHEM PACK">
                <div class="brand-icon"><img src="{{ asset('assets/images/logo.png') }}" alt="SIHEM PACK">
                </div>
                <div>
                    <img src="{{ asset('assets/images/logo_texto_blanco.png') }}" alt="SIHEM PACK" class="brand-logo">
                    <div class="brand-sub">Corrugated solutions</div>
                </div>
            </a>
            <div class="nav-links">
                <a href="#soluciones">Soluciones</a>
                <a href="#productos">Productos</a>
                <a href="#planta">Planta</a>
                <a href="#video">Video</a>
                <a href="#contacto">Contacto</a>
            </div>
            <a class="btn btn-primary" href="#contacto">Cotizar</a>
        </nav>

        <div class="container hero-grid" id="inicio">
            <div>
                <div class="pill">⏱ Entregas oportunas · Especialidades · Calidad industrial</div>
                <h1>Empaques que protegen su producto y aceleran su operación.</h1>
                <p>Diseñamos, fabricamos y suministramos soluciones de cartón corrugado para empresas que no pueden
                    detener su línea por falta de empaque, reprocesos o entregas tardías.</p>
                <div class="hero-actions">
                    <a class="btn btn-primary" href="#contacto">Solicitar asesoría →</a>
                    <a class="btn btn-outline" href="#productos">Ver productos</a>
                </div>
            </div>

            <div class="visual-card">
                <div class="factory-visual">
                    <div class="factory-inner"><img src="{{ asset('assets/images') }}/sihem_pack_page_2.jpg.jpeg"
                            alt="Operación y empaques de cartón corrugado"></div>
                </div>
                <div class="problem-card">
                    <small>Problema que resolvemos</small>
                    <p>Evitar sobrecostos por falta oportuna de empaque: reprocesos, almacenaje extra e incumplimientos.
                    </p>
                </div>
            </div>
        </div>
    </header>

    <section id="soluciones">
        <div class="container">
            <div class="story-grid">
                <div>
                    <div class="section-kicker">Storytelling central</div>
                    <h2>De proveedor de cajas a aliado estratégico de empaque.</h2>
                </div>
                <p class="lead">SIHEM PACK acompaña a sus clientes desde la necesidad operativa hasta la solución final:
                    una caja, rejilla, bandeja, panel u octavín que responda al producto, al proceso, al almacenaje y al
                    tiempo de entrega. El empaque deja de ser un insumo y se convierte en una decisión que protege
                    margen, reputación y continuidad.</p>
            </div>

            <div class="process-grid">
                <article class="card">
                    <div class="card-pad">
                        <div class="icon">01</div>
                        <h3>Diagnóstico</h3>
                        <p>Entendemos producto, operación, tiempos y riesgos logísticos.</p>
                    </div>
                </article>
                <article class="card">
                    <div class="card-pad">
                        <div class="icon">02</div>
                        <h3>Diseño técnico</h3>
                        <p>Definimos estructura, material, resistencia y presentación.</p>
                    </div>
                </article>
                <article class="card">
                    <div class="card-pad">
                        <div class="icon">03</div>
                        <h3>Producción</h3>
                        <p>Fabricación de soluciones en cartón corrugado sencillo, doble, triple o microcorrugado.</p>
                    </div>
                </article>
                <article class="card">
                    <div class="card-pad">
                        <div class="icon">04</div>
                        <h3>Entrega confiable</h3>
                        <p>Planeación para reducir reprocesos, almacenaje innecesario e incumplimientos.</p>
                    </div>
                </article>
            </div>

            <div class="image-band">
                <div class="image-tile"><img src="{{ asset('assets/images') }}/sihem_pack_page_3.jpg.jpeg"
                        alt="Misión, visión y material corrugado">
                    <div class="caption">Innovación, eficiencia, calidad y tiempos de entrega óptimos.</div>
                </div>
                <div class="image-tile"><img src="{{ asset('assets/images') }}/sihem_pack_page_4.jpg.jpeg"
                        alt="Cartón corrugado sencillo, doble, triple y microcorrugado">
                    <div class="caption">Cartón corrugado sencillo, doble, triple y microcorrugado con recubrimientos
                        especiales.</div>
                </div>
            </div>
        </div>
    </section>

    <section class="white" id="productos">
        <div class="container">
            <div class="section-head">
                <div>
                    <div class="section-kicker">Soluciones que ofrecemos</div>
                    <h2>Portafolio diseñado para operaciones reales.</h2>
                </div>
                <a class="btn btn-dark" href="#contacto">Descargar catálogo</a>
            </div>

            <div class="products-grid">
                <article class="product-card">
                    <div class="product-img"><img src="{{ asset('assets/images') }}/sihem_pack_page_6.jpg.jpeg"
                            alt="Cajas corrugadas">
                    </div>
                    <div class="product-body">
                        <h3 class="product-title">Cajas corrugadas <span class="arrow">›</span></h3>
                        <p>Empaques a medida para resguardar, transportar y presentar sus productos.</p>
                    </div>
                </article>
                <article class="product-card">
                    <div class="product-img"><img src="{{ asset('assets/images') }}/sihem_pack_page_6.jpg.jpeg"
                            alt="Rejillas y separadores"></div>
                    <div class="product-body">
                        <h3 class="product-title">Rejillas y separadores <span class="arrow">›</span></h3>
                        <p>Protección interna para productos frágiles, industriales o de alto volumen.</p>
                    </div>
                </article>
                <article class="product-card">
                    <div class="product-img"><img src="{{ asset('assets/images') }}/sihem_pack_page_6.jpg.jpeg"
                            alt="Bandejas"></div>
                    <div class="product-body">
                        <h3 class="product-title">Bandejas <span class="arrow">›</span></h3>
                        <p>Soluciones prácticas para manejo, exhibición y operación logística.</p>
                    </div>
                </article>
                <article class="product-card">
                    <div class="product-img"><img src="{{ asset('assets/images') }}/sihem_pack_page_5.jpg.jpeg"
                            alt="Paneles genéricos">
                    </div>
                    <div class="product-body">
                        <h3 class="product-title">Paneles genéricos <span class="arrow">›</span></h3>
                        <p>Piezas reutilizables, versátiles y fáciles de almacenar para procesos intermedios.</p>
                    </div>
                </article>
                <article class="product-card">
                    <div class="product-img"><img src="{{ asset('assets/images') }}/sihem_pack_page_6.jpg.jpeg"
                            alt="Octavines"></div>
                    <div class="product-body">
                        <h3 class="product-title">Octavines <span class="arrow">›</span></h3>
                        <p>Contenedores robustos para operaciones que exigen volumen y resistencia.</p>
                    </div>
                </article>
                <article class="product-card">
                    <div class="product-img"><img src="{{ asset('assets/images') }}/sihem_pack_page_4.jpg.jpeg"
                            alt="Especialidades">
                    </div>
                    <div class="product-body">
                        <h3 class="product-title">Especialidades <span class="arrow">›</span></h3>
                        <p>Diseño de empaques con recubrimientos y configuraciones específicas.</p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section class="video-section" id="video">
        <div class="container video-grid">
            <div>
                <h2>La fábrica, el proceso y el producto en movimiento.</h2>
                <p class="lead">Esta sección está lista para integrar videos reales de la planta, maquinaria, líneas de
                    producción, armado de empaques, control de calidad y testimonios comerciales.</p>
                <div class="video-note">Por ahora se muestra una vista previa visual construida con el material del
                    documento. En cuanto nos compartan videos en MP4, YouTube o Vimeo, los integramos como reproductores
                    reales.</div>
            </div>
            <div class="video-frame">
                <img src="{{ asset('assets/images') }}/sihem_pack_page_1.jpg.jpeg" alt="Vista previa video SIHEM PACK">
                <div class="play"><span>▶</span></div>
            </div>
        </div>
    </section>

    <section id="planta">
        <div class="container capacity-grid">
            <div class="dark-panel">
                <div class="section-kicker">Capacidad y confianza</div>
                <h2>Una fábrica pensada para responder con precisión.</h2>
                <p class="lead">El sitio debe mostrar instalaciones, proceso, inventario de cartón, maquinaria, control
                    de calidad y equipo humano para convertir la visita digital en confianza comercial.</p>
                <div class="trust-grid">
                    <div class="trust-item">✓ Calidad</div>
                    <div class="trust-item">✓ Entrega</div>
                    <div class="trust-item">✓ Flexibilidad</div>
                    <div class="trust-item">✓ Sostenibilidad</div>
                </div>
            </div>
            <div class="industry-grid" id="industrias">
                <div class="industry"><strong>Vidrio</strong>
                    <p>Aplicaciones de empaque según producto, logística y protección requerida.</p>
                </div>
                <div class="industry"><strong>Alimentos</strong>
                    <p>Aplicaciones de empaque según producto, logística y protección requerida.</p>
                </div>
                <div class="industry"><strong>Automotriz</strong>
                    <p>Aplicaciones de empaque según producto, logística y protección requerida.</p>
                </div>
                <div class="industry"><strong>Logística</strong>
                    <p>Aplicaciones de empaque según producto, logística y protección requerida.</p>
                </div>
                <div class="industry"><strong>Manufactura</strong>
                    <p>Aplicaciones de empaque según producto, logística y protección requerida.</p>
                </div>
                <div class="industry"><strong>Consumo</strong>
                    <p>Aplicaciones de empaque según producto, logística y protección requerida.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="gallery">
        <div class="container">
            <div class="section-kicker">Galería visual</div>
            <h2>Productos, aplicaciones y contacto comercial.</h2>
            <div class="gallery-grid">
                <div class="gallery-item"><img src="{{ asset('assets/images') }}/sihem_pack_page_2.jpg.jpeg" alt="Operación">
                </div>
                <div class="gallery-item"><img src="{{ asset('assets/images') }}/sihem_pack_page_4.jpg.jpeg"
                        alt="Cartón corrugado">
                </div>
                <div class="gallery-item"><img src="{{ asset('assets/images') }}/sihem_pack_page_5.jpg.jpeg"
                        alt="Paneles genéricos">
                </div>
                <div class="gallery-item"><img src="{{ asset('assets/images') }}/sihem_pack_page_6.jpg.jpeg"
                        alt="Soluciones de empaque"></div>
            </div>
        </div>
    </section>

    <section class="cta pattern" id="contacto">
        <div class="container cta-grid">
            <div>
                <div class="section-kicker" style="color: rgba(255,255,255,.78);">Cotización inteligente</div>
                <h2>Hablemos de su proyecto de empaque.</h2>
                <p class="lead">Un asesor puede recibir por WhatsApp sus medidas, fotos, volumen aproximado, uso del
                    empaque y destino logístico para orientar la solución correcta.</p>
            </div>
            <form class="form-card">
                <input type="text" placeholder="Nombre y empresa" />
                <input type="text" placeholder="Correo / WhatsApp" />
                <textarea placeholder="¿Qué necesita empacar?"></textarea>
                <button type="button" class="btn btn-dark" style="width:100%; padding: 17px 24px;">Enviar
                    solicitud</button>
            </form>
        </div>
    </section>

    <footer>
        <div class="container footer-grid">
            <div>
                <img src="{{ asset('assets/images/logo_texto_blanco.png') }}" alt="SIHEM PACK" class="footer-logo">
                <p class="footer-text">Soluciones en empaques de cartón corrugado.</p>
            </div>
            <div class="footer-contact">
                <p>📍 Pedro Vargas 3G Lote 6 S/N, San Agustín Tlaxiaca, Hidalgo CP 42171</p>
                <p>☎ 55 56 1030 2964 · 771 557 0973</p>
                <p>✉ contacto@sihempack.com</p>
            </div>
            <div>
                <a class="btn btn-primary" href="https://wa.me/5255610302964" target="_blank"
                    rel="noopener">WhatsApp</a>
            </div>
        </div>
    </footer>

    <a class="whatsapp" href="https://wa.me/5255610302964" target="_blank" rel="noopener" aria-label="WhatsApp">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="32" height="32" aria-hidden="true">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
        </svg>
    </a>

    <script src="{{ asset('assets/js/app.js') }}" defer></script>
</body>

</html>