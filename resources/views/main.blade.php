<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    {{-- SEO primario --}}
    <title>{{ $seo->title ?? 'SIHEM PACK | Soluciones en Cartón Corrugado' }}</title>
    <meta name="description" content="{{ $seo->description ?? 'Fabricamos cajas, rejillas, bandejas, paneles y octavines de cartón corrugado. Entregas oportunas, calidad industrial y diseño a medida para su operación.' }}" />
    @if(!empty($seo->keywords))
    <meta name="keywords" content="{{ $seo->keywords }}" />
    @endif
    <meta name="robots" content="{{ $seo->robots ?? 'index, follow' }}" />
    @if(!empty($seo->canonical_url))
    <link rel="canonical" href="{{ $seo->canonical_url }}" />
    @endif

    {{-- Open Graph --}}
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="SIHEM PACK" />
    <meta property="og:title" content="{{ $seo->og_title ?? $seo->title ?? 'SIHEM PACK | Soluciones en Cartón Corrugado' }}" />
    <meta property="og:description" content="{{ $seo->og_description ?? $seo->description ?? 'Fabricamos cajas, rejillas, bandejas, paneles y octavines de cartón corrugado.' }}" />
    <meta property="og:image" content="{{ !empty($seo->og_image) ? asset($seo->og_image) : asset('assets/images/sihem_pack_page_1.jpg.jpeg') }}" />
    @if(!empty($seo->canonical_url))
    <meta property="og:url" content="{{ $seo->canonical_url }}" />
    @endif

    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="{{ $seo->og_title ?? $seo->title ?? 'SIHEM PACK' }}" />
    <meta name="twitter:description" content="{{ $seo->og_description ?? $seo->description ?? 'Fabricamos cajas, rejillas, bandejas, paneles y octavines de cartón corrugado.' }}" />
    <meta name="twitter:image" content="{{ !empty($seo->og_image) ? asset($seo->og_image) : asset('assets/images/sihem_pack_page_1.jpg.jpeg') }}" />

    {{-- Schema.org JSON-LD --}}
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "{{ $seo->schema_type ?? 'Organization' }}",
        "name": "SIHEM PACK",
        "description": "{{ $seo->description ?? 'Soluciones en empaques de cartón corrugado' }}",
        "url": "{{ $seo->canonical_url ?? url('/') }}",
        "logo": "{{ asset('assets/images/sihem_pack_page_1.jpg.jpeg') }}",
        "address": {
            "@type": "PostalAddress",
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
                <div class="brand-icon"><img src="sihem_pack_assets/sihem_pack_page_1.jpg" alt="SIHEM PACK"></div>
                <div>
                    <div class="brand-title">SIHEM <span>PACK</span></div>
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
                    <div class="factory-inner"><img src="sihem_pack_assets/sihem_pack_page_2.jpg"
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
                <div class="image-tile"><img src="sihem_pack_assets/sihem_pack_page_3.jpg"
                        alt="Misión, visión y material corrugado">
                    <div class="caption">Innovación, eficiencia, calidad y tiempos de entrega óptimos.</div>
                </div>
                <div class="image-tile"><img src="sihem_pack_assets/sihem_pack_page_4.jpg"
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
                    <div class="product-img"><img src="sihem_pack_assets/sihem_pack_page_6.jpg" alt="Cajas corrugadas">
                    </div>
                    <div class="product-body">
                        <h3 class="product-title">Cajas corrugadas <span class="arrow">›</span></h3>
                        <p>Empaques a medida para resguardar, transportar y presentar sus productos.</p>
                    </div>
                </article>
                <article class="product-card">
                    <div class="product-img"><img src="sihem_pack_assets/sihem_pack_page_6.jpg"
                            alt="Rejillas y separadores"></div>
                    <div class="product-body">
                        <h3 class="product-title">Rejillas y separadores <span class="arrow">›</span></h3>
                        <p>Protección interna para productos frágiles, industriales o de alto volumen.</p>
                    </div>
                </article>
                <article class="product-card">
                    <div class="product-img"><img src="sihem_pack_assets/sihem_pack_page_6.jpg" alt="Bandejas"></div>
                    <div class="product-body">
                        <h3 class="product-title">Bandejas <span class="arrow">›</span></h3>
                        <p>Soluciones prácticas para manejo, exhibición y operación logística.</p>
                    </div>
                </article>
                <article class="product-card">
                    <div class="product-img"><img src="sihem_pack_assets/sihem_pack_page_5.jpg" alt="Paneles genéricos">
                    </div>
                    <div class="product-body">
                        <h3 class="product-title">Paneles genéricos <span class="arrow">›</span></h3>
                        <p>Piezas reutilizables, versátiles y fáciles de almacenar para procesos intermedios.</p>
                    </div>
                </article>
                <article class="product-card">
                    <div class="product-img"><img src="sihem_pack_assets/sihem_pack_page_6.jpg" alt="Octavines"></div>
                    <div class="product-body">
                        <h3 class="product-title">Octavines <span class="arrow">›</span></h3>
                        <p>Contenedores robustos para operaciones que exigen volumen y resistencia.</p>
                    </div>
                </article>
                <article class="product-card">
                    <div class="product-img"><img src="sihem_pack_assets/sihem_pack_page_4.jpg" alt="Especialidades">
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
                <div class="section-kicker">Video corporativo</div>
                <h2>La fábrica, el proceso y el producto en movimiento.</h2>
                <p class="lead">Esta sección está lista para integrar videos reales de la planta, maquinaria, líneas de
                    producción, armado de empaques, control de calidad y testimonios comerciales.</p>
                <div class="video-note">Por ahora se muestra una vista previa visual construida con el material del
                    documento. En cuanto nos compartan videos en MP4, YouTube o Vimeo, los integramos como reproductores
                    reales.</div>
            </div>
            <div class="video-frame">
                <img src="sihem_pack_assets/sihem_pack_page_1.jpg" alt="Vista previa video SIHEM PACK">
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
                <div class="gallery-item"><img src="sihem_pack_assets/sihem_pack_page_2.jpg" alt="Operación"></div>
                <div class="gallery-item"><img src="sihem_pack_assets/sihem_pack_page_4.jpg" alt="Cartón corrugado">
                </div>
                <div class="gallery-item"><img src="sihem_pack_assets/sihem_pack_page_5.jpg" alt="Paneles genéricos">
                </div>
                <div class="gallery-item"><img src="sihem_pack_assets/sihem_pack_page_6.jpg"
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
                <div class="footer-title">SIHEM <span>PACK</span></div>
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

    <a class="whatsapp" href="https://wa.me/5255610302964" target="_blank" rel="noopener" aria-label="WhatsApp">☏</a>

    <script src="{{ asset('assets/js/app.js') }}" defer></script>
</body>

</html>