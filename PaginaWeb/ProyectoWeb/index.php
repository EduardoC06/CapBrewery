<!doctype html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CAP Brewery - Cervezas Artesanales</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="styles.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Epilogue:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />

    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />

    <style>
      /* --- VARIABLES CSS (Tema) --- */
      :root {
        --primary: #f27f0d;
        --primary-hover: #d96d00;
        --bg-light: #f8f7f5;
        --bg-dark: #221910;
        --bg-card: #ffffff;
        --text-dark: #3f2e1e;
        --text-light: #e6e0d8;
        --text-gray: #6b7280;
        --border: #e5e7eb;
        --radius: 0.5rem;
        --shadow:
          0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        --shadow-lg:
          0 10px 15px -3px rgba(0, 0, 0, 0.1),
          0 4px 6px -2px rgba(0, 0, 0, 0.05);
      }

      a {
        text-decoration: none;
        color: inherit;
        transition: color 0.3s;
      }
      ul {
        list-style: none;
      }
      img {
        max-width: 100%;
        display: block;
      }
      button {
        border: none;
        background: none;
        cursor: pointer;
        font-family: inherit;
      }

      /* --- UTILIDADES --- */
      .container {
        max-width: 1280px;
        margin: 0 auto;
        padding: 0 1.5rem;
      }

      .text-primary {
        color: var(--primary);
      }
      .text-white {
        color: white;
      }
      .font-bold {
        font-weight: 700;
      }
      .uppercase {
        text-transform: uppercase;
      }

      .btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 0.75rem 2rem;
        border-radius: var(--radius);
        font-weight: 700;
        transition: all 0.3s ease;
      }

      .btn-primary {
        background-color: var(--primary);
        color: white;
        box-shadow: var(--shadow);
      }
      .btn-primary:hover {
        background-color: var(--primary-hover);
        transform: translateY(-2px);
      }

      .btn-outline {
        background-color: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.2);
        color: white;
        backdrop-filter: blur(4px);
      }
      .btn-outline:hover {
        background-color: rgba(255, 255, 255, 0.2);
      }

      /* --- NAVBAR --- */
      nav {
        position: sticky;
        top: 0;
        z-index: 1000;
        background-color: rgba(248, 247, 245, 0.95);
        backdrop-filter: blur(8px);
        border-bottom: 1px solid rgba(63, 46, 30, 0.1);
        height: 80px;
        display: flex;
        align-items: center;
      }

      .nav-content {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
      }

      .logo {
        display: flex;
        align-items: center;
        gap: 0.5rem;
      }
      .logo span {
        font-size: 2.25rem;
      }
      .logo-text h1 {
        font-size: 1.5rem;
        letter-spacing: -0.05em;
        line-height: 1;
      }
      .logo-text p {
        font-size: 0.7rem;
        letter-spacing: 0.2em;
        color: var(--text-gray);
        font-weight: 600;
      }

      .nav-links {
        display: none;
        gap: 2rem;
      }
      .nav-links a:hover {
        color: var(--primary);
      }

      .nav-icons {
        display: flex;
        gap: 1rem;
        align-items: center;
      }
      .cart-btn {
        position: relative;
      }
      .cart-badge {
        position: absolute;
        top: -5px;
        right: -5px;
        background-color: var(--primary);
        color: white;
        font-size: 0.7rem;
        font-weight: bold;
        height: 18px;
        width: 18px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
      }

      @media (min-width: 768px) {
        .nav-links {
          display: flex;
        }
        .menu-btn {
          display: none;
        }
      }

      /* Botón de Accesibilidad */
      .dropdownboton {
        position: relative;
        cursor: pointer;
        display: flex;
        align-items: center;
      }
      .dropdown-content-boton {
        display: none;
        position: absolute;
        top: 100%;
        right: 0;
        background-color: white;
        min-width: 120px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        border-radius: 4px;
        z-index: 102;
      }
      .dropdown-content-boton span {
        display: block;
        padding: 10px;
        color: var(--text-dark);
        cursor: pointer;
      }
      .dropdown-content-boton span:hover {
        background-color: #f1f1f1;
        color: var(--primary);
      }
      .dropdownboton:hover .dropdown-content-boton {
        display: block;
      }

      /* --- HERO SECTION --- */
      .hero {
        position: relative;
        background-color: var(--bg-dark);
        overflow: hidden;
        padding: 6rem 0 10rem;
        color: white;
      }

      .hero-bg {
        position: absolute;
        inset: 0;
        z-index: 0;
      }
      .hero-bg img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        opacity: 0.6;
      }
      .hero-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(
          to right,
          rgba(0, 0, 0, 0.8),
          rgba(0, 0, 0, 0.5),
          transparent
        );
      }

      .hero-content {
        position: relative;
        z-index: 10;
        max-width: 650px;
      }

      .est-badge {
        display: inline-block;
        padding: 0.25rem 0.75rem;
        background-color: rgba(242, 127, 13, 0.2);
        color: var(--primary);
        border: 1px solid rgba(242, 127, 13, 0.3);
        border-radius: 0.25rem;
        font-size: 0.875rem;
        font-weight: 600;
        margin-bottom: 1.5rem;
        backdrop-filter: blur(4px);
      }

      .hero h1 {
        font-size: 3rem;
        font-weight: 800;
        line-height: 1.1;
        margin-bottom: 1.5rem;
      }
      .hero p {
        font-size: 1.125rem;
        color: #e5e5e5;
        margin-bottom: 2rem;
        line-height: 1.6;
      }
      .hero-buttons {
        display: flex;
        gap: 1rem;
        flex-wrap: wrap;
      }

      @media (min-width: 768px) {
        .hero h1 {
          font-size: 4rem;
        }
      }

      /* --- FEATURES SECTION --- */
      .features {
        background-color: white;
        border-bottom: 1px solid var(--border);
        padding: 3rem 0;
      }
      .features-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 2rem;
      }
      .feature-item {
        display: flex;
        align-items: flex-start;
        gap: 1rem;
        padding: 1rem;
      }
      .feature-icon {
        background-color: rgba(242, 127, 13, 0.1);
        color: var(--primary);
        padding: 0.75rem;
        border-radius: 50%;
        display: flex;
      }
      .feature-text h3 {
        font-size: 1.125rem;
        font-weight: 700;
        margin-bottom: 0.25rem;
      }
      .feature-text p {
        font-size: 0.875rem;
        color: var(--text-gray);
      }

      @media (min-width: 768px) {
        .features-grid {
          grid-template-columns: repeat(3, 1fr);
          gap: 0;
        }
        .feature-item {
          border-right: 1px solid var(--border);
        }
        .feature-item:last-child {
          border-right: none;
        }
      }

      /* --- PRODUCT GRID --- */
      .products {
        padding: 5rem 0;
      }
      .products-header {
        display: flex;
        justify-content: space-between;
        align-items: flex-end;
        margin-bottom: 3rem;
      }
      .section-tag {
        color: var(--primary);
        font-weight: 700;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        font-size: 0.875rem;
        display: block;
        margin-bottom: 0.5rem;
      }
      .products-header h2 {
        font-size: 2.25rem;
        font-weight: 700;
      }

      .products-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 2rem;
      }

      .product-card {
        background-color: white;
        border: 1px solid var(--border);
        border-radius: 0.75rem;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        transition: box-shadow 0.3s ease;
      }
      .product-card:hover {
        box-shadow: var(--shadow-lg);
      }

      .card-image {
        position: relative;
        height: 250px;
        background-color: #f3f4f6;
        overflow: hidden;
      }
      .card-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.7s ease;
      }
      .product-card:hover .card-image img {
        transform: scale(1.1);
      }

      .badge {
        position: absolute;
        top: 1rem;
        left: 1rem;
        z-index: 10;
        font-size: 0.75rem;
        font-weight: 700;
        padding: 0.25rem 0.5rem;
        border-radius: 0.25rem;
      }
      .badge-primary {
        background-color: var(--primary);
        color: white;
      }
      .badge-dark {
        background-color: #111;
        color: white;
      }

      .card-content {
        padding: 1.5rem;
        display: flex;
        flex-direction: column;
        flex-grow: 1;
      }
      .brand-name {
        font-size: 0.75rem;
        text-transform: uppercase;
        color: var(--text-gray);
        margin-bottom: 0.25rem;
      }
      .product-title {
        font-size: 1.25rem;
        font-weight: 700;
        margin-bottom: 0.5rem;
        transition: color 0.3s;
      }
      .product-card:hover .product-title {
        color: var(--primary);
      }

      .product-desc {
        font-size: 0.875rem;
        color: var(--text-gray);
        margin-bottom: 1rem;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
      }

      .card-footer {
        margin-top: auto;
        padding-top: 1rem;
        border-top: 1px solid var(--border);
        display: flex;
        justify-content: space-between;
        align-items: center;
      }
      .price {
        font-size: 1.5rem;
        font-weight: 700;
      }
      .btn-add {
        background-color: rgba(242, 127, 13, 0.1);
        color: var(--primary);
        padding: 0.5rem 1rem;
        border-radius: var(--radius);
        font-weight: 700;
        display: flex;
        align-items: center;
        gap: 0.5rem;
        transition: all 0.2s;
      }
      .btn-add:hover {
        background-color: var(--primary);
        color: white;
      }

      /* --- NEWSLETTER --- */
      .newsletter {
        background-color: #111;
        color: white;
        padding: 5rem 0;
        position: relative;
        overflow: hidden;
        text-align: center;
      }
      .glow {
        position: absolute;
        width: 300px;
        height: 300px;
        border-radius: 50%;
        filter: blur(80px);
        opacity: 0.2;
      }
      .glow-1 {
        top: -50px;
        right: -50px;
        background-color: var(--primary);
      }
      .glow-2 {
        bottom: -50px;
        left: -50px;
        background-color: var(--primary);
      }

      .newsletter-content {
        position: relative;
        z-index: 10;
        max-width: 600px;
        margin: 0 auto;
      }
      .newsletter form {
        display: flex;
        gap: 1rem;
        margin-top: 2rem;
        flex-direction: column;
      }
      .newsletter input {
        flex: 1;
        padding: 0.75rem 1.25rem;
        border-radius: var(--radius);
        background: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.2);
        color: white;
      }
      @media (min-width: 640px) {
        .newsletter form {
          flex-direction: row;
        }
      }

      /* --- FOOTER --- */
      footer {
        background-color: var(--bg-light);
        border-top: 1px solid var(--border);
        padding: 4rem 0 2rem;
        font-size: 0.875rem;
      }
      .footer-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 3rem;
        margin-bottom: 3rem;
      }
      .footer-title {
        font-weight: 700;
        margin-bottom: 1rem;
        color: var(--text-dark);
      }
      .footer-links li {
        margin-bottom: 0.5rem;
      }
      .footer-links a {
        color: var(--text-gray);
      }
      .footer-links a:hover {
        color: var(--primary);
      }

      .warning-box {
        text-align: center;
        background-color: #fff3cd;
        color: #856404;
        padding: 1rem;
        margin-bottom: 2rem;
        border-radius: var(--radius);
        border: 1px solid #ffeeba;
        font-weight: 700;
      }

      .copyright {
        border-top: 1px solid var(--border);
        padding-top: 2rem;
        display: flex;
        flex-direction: column;
        gap: 1rem;
        align-items: center;
        text-align: center;
        color: var(--text-gray);
      }

      @media (min-width: 768px) {
        .footer-grid {
          grid-template-columns: 2fr 1fr 1fr 1fr;
        }
        .copyright {
          flex-direction: row;
          justify-content: space-between;
          text-align: left;
        }
      }

      /* Estilos Carrito (Consistente con Compra) */
      .carrito {
        display: none;
        position: fixed;
        z-index: 2000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.6);
        backdrop-filter: blur(4px);
      }

      .carrito-contenido {
        position: relative;
        margin: auto;
        padding: 2rem;
        border-radius: var(--radius);
        width: 90%;
        max-width: 500px;
        top: 50%;
        transform: translateY(-50%);
        background-color: #fff;
        box-shadow:
          0 20px 25px -5px rgba(0, 0, 0, 0.1),
          0 10px 10px -5px rgba(0, 0, 0, 0.04);
      }

      .carrito-item {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 1rem 0;
        border-bottom: 1px solid var(--border);
      }
      .carrito-item img {
        width: 60px;
        height: 60px;
        object-fit: cover;
        border-radius: 4px;
        margin-right: 1rem;
      }
      .carrito-item-detalles {
        flex: 1;
      }
      .carrito-item-titulo {
        font-weight: 700;
        display: block;
        font-size: 0.9rem;
      }
      .carrito-item-precio {
        color: var(--primary);
        font-weight: 600;
      }
      .btn-eliminar {
        color: #ef4444;
        cursor: pointer;
        padding: 5px;
      }
      .carrito-total {
        margin-top: 1.5rem;
        padding-top: 1rem;
        border-top: 2px solid var(--border);
      }
      .carrito-total .fila {
        display: flex;
        justify-content: space-between;
        font-size: 1.25rem;
        font-weight: 800;
        margin-bottom: 1rem;
      }
      .btn-pagar {
        width: 100%;
        background: var(--text-main);
        color: white;
        padding: 1rem;
        border-radius: var(--radius);
        font-weight: 700;
        display: flex;
        justify-content: center;
        align-items: center;
        transition: 0.2s;
      }
      .btn-pagar:hover {
        background: var(--primary);
      }
    </style>
  </head>
  <body>
    <nav>
      <div class="container nav-content">
        <div class="logo">
          <span class="material-icons text-primary">local_drink</span>
          <div class="logo-text">
            <h1>CAP <span class="text-primary">BREWERY</span></h1>
            <p>CERVEZA ARTESANAL</p>
          </div>
        </div>

        <div class="nav-links">
          <a href="">Inicio</a>
          <a href="Sobre-CapBrewery.php">Nosotros</a>
          <a href="Compra-CapBrewery.php">Productos</a>
          <a href="Contacto-CapBrewery.php">Contáctenos</a>
        </div>

        <div class="nav-icons">
          <div id="idiomaLink" class="dropdownboton">
            <img
              src="imagenes/iconos/accesibilidad.png"
              alt="Accesibilidad"
              width="28px"
            />
            <div id="opcionesIdioma" class="dropdown-content-boton">
              <span onclick="cambiarVideo('ingles')">Inglés</span>
              <span onclick="cambiarVideo('espanol')">Español</span>
            </div>
          </div>

          <button class="cart-btn">
            <span class="material-icons">shopping_cart</span>
            <span class="cart-badge">0</span>
          </button>
          <button class="menu-btn">
            <span class="material-icons">menu</span>
          </button>
        </div>
      </div>
    </nav>

    <section class="hero">
      <div class="hero-bg">
        <img
          src="https://lh3.googleusercontent.com/aida-public/AB6AXuDRNISI1sf1ddPy9fI85CPVE6WMgok1MMDrH3aDxx4bcda3YCqctl9NlVkMDU5FIjto1D6VyQzf6JMxmheMCdpwGGWJeRF1sbt8KTx9py5k-olkI3siq5KXFoLLsv4kT1Lzvjoidn6BZm9ubDwgPDbiG0MPesGh8gPv_yqDG0ri5LZvOslBl0HIEr9K0WP-pU7TURWKfzl5_dla472WYI3iyIw_G1VSUHy-2wm4F5rSj9Yf56g_4ID1A4kaRhBULl7dNGd1pIeaXw0"
          alt="Interior cervecería"
        />
        <div class="hero-overlay"></div>
      </div>

      <div class="container hero-content">
        <span class="est-badge">Est. 2023</span>
        <h1>Sabor <br />que relaja</h1>
        <p>
          CAP Brewery es una empresa fabricadora de cervezas artesanales,
          dedicada y comprometida a nuestros clientes para que tengan una
          experiencia inigualable con estas bebidas.
        </p>
        <div class="hero-buttons">
          <a href="#" class="btn btn-primary">
            Ver Promociones
            <span
              class="material-icons"
              style="font-size: 1rem; margin-left: 8px"
              >arrow_forward</span
            >
          </a>
          <a href="#" class="btn btn-outline">Sobre Nosotros</a>
        </div>
      </div>
    </section>

    <section class="features">
      <div class="container">
        <div class="features-grid">
          <div class="feature-item">
            <div class="feature-icon">
              <span class="material-icons">handshake</span>
            </div>
            <div class="feature-text">
              <h3>Manos Peruanas</h3>
              <p>
                Las cervezas artesanales son producidas por las manos de
                nuestros hermanos peruanos.
              </p>
            </div>
          </div>
          <div class="feature-item">
            <div class="feature-icon">
              <span class="material-icons">verified</span>
            </div>
            <div class="feature-text">
              <h3>Calidad Premium</h3>
              <p>
                Características enfocadas en la calidad superior frente a las
                cervezas comerciales.
              </p>
            </div>
          </div>
          <div class="feature-item">
            <div class="feature-icon">
              <span class="material-icons">lightbulb</span>
            </div>
            <div class="feature-text">
              <h3>Creatividad e Innovación</h3>
              <p>
                Un enfoque único en la creatividad de sabores e innovación
                constante.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="products">
      <div class="container">
        <div class="products-header">
          <div>
            <span class="section-tag">Nuestras Variedades</span>
            <h2>Tenemos las mejores promociones</h2>
            <p style="color: #6b7280; margin-top: 0.5rem">
              Promociones únicas para usted por nuestra reciente apertura.
            </p>
          </div>
          <a
            href="#"
            class="text-primary font-bold"
            style="display: flex; align-items: center"
          >
            Ver Todo <span class="material-icons">arrow_right_alt</span>
          </a>
        </div>

        <div class="products-grid">
          <div class="product-card">
            <div class="card-image">
              <span class="badge badge-primary">DOBLE IPA</span>
              <img src="imagenes/magdalena.jpeg" alt="Cerveza Magdalena" />
            </div>
            <div class="card-content">
              <p class="brand-name">CAP Brewery</p>
              <h3 class="product-title">Magdalena</h3>
              <p class="product-desc">
                Una cerveza doble IPA de contextura espesa y abundante espuma.
              </p>
              <div class="card-footer">
                <span class="price">S/ 14.00</span>
                <button class="btn-add">
                  <span class="material-icons">add_shopping_cart</span> Agregar
                </button>
              </div>
            </div>
          </div>

          <div class="product-card">
            <div class="card-image">
              <span class="badge badge-dark">PREMIADA</span>
              <img src="imagenes/barbarin.jpg" alt="Cerveza Barbarian" />
            </div>
            <div class="card-content">
              <p class="brand-name">Barbarian</p>
              <h3 class="product-title">Real Ale</h3>
              <p class="product-desc">
                Consiguió el año pasado en Alemania la medalla de bronce del
                festival global.
              </p>
              <div class="card-footer">
                <span class="price">S/ 16.50</span>
                <button class="btn-add">
                  <span class="material-icons">add_shopping_cart</span> Agregar
                </button>
              </div>
            </div>
          </div>

          <div class="product-card">
            <div class="card-image">
              <img src="imagenes/maddock.jpg" alt="Cerveza Maddock" />
            </div>
            <div class="card-content">
              <p class="brand-name">Maddock</p>
              <h3 class="product-title">Maddock Rocoto</h3>
              <p class="product-desc">
                Una cerveza única que tiene una variedad de sabores con un toque
                de rocoto.
              </p>
              <div class="card-footer">
                <span class="price">S/ 15.00</span>
                <button class="btn-add">
                  <span class="material-icons">add_shopping_cart</span> Agregar
                </button>
              </div>
            </div>
          </div>

          <div class="product-card">
            <div class="card-image">
              <img src="imagenes/cumbres.jpg" alt="Cerveza Cumbres" />
            </div>
            <div class="card-content">
              <p class="brand-name">Cumbres</p>
              <h3 class="product-title">Cumbres Kolsch</h3>
              <p class="product-desc">
                Conocida por sus variedades de cerveza Kolsch con quinua y
                Barley Wine.
              </p>
              <div class="card-footer">
                <span class="price">S/ 13.00</span>
                <button class="btn-add">
                  <span class="material-icons">add_shopping_cart</span> Agregar
                </button>
              </div>
            </div>
          </div>

          <div class="product-card">
            <div class="card-image">
              <span class="badge badge-primary">PLATA</span>
              <img src="imagenes/Nmundo.jpg" alt="Cerveza Nuevo Mundo" />
            </div>
            <div class="card-content">
              <p class="brand-name">Nuevo Mundo</p>
              <h3 class="product-title">Panam Pale Ale</h3>
              <p class="product-desc">
                Su variedad Panam Pale Ale ganó la medalla de plata en el South
                Beer Cup.
              </p>
              <div class="card-footer">
                <span class="price">S/ 15.50</span>
                <button class="btn-add">
                  <span class="material-icons">add_shopping_cart</span> Agregar
                </button>
              </div>
            </div>
          </div>

          <div class="product-card">
            <div class="card-image">
              <img src="imagenes/melkim.jpg" alt="Cerveza Melkim" />
            </div>
            <div class="card-content">
              <p class="brand-name">Melkim</p>
              <h3 class="product-title">Melkim Arequipa</h3>
              <p class="product-desc">
                Elaborada en Arequipa. Produce cervezas tipo Ale, Pale, Red y
                Porter.
              </p>
              <div class="card-footer">
                <span class="price">S/ 12.00</span>
                <button class="btn-add">
                  <span class="material-icons">add_shopping_cart</span> Agregar
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="newsletter">
      <div class="glow glow-1"></div>
      <div class="glow glow-2"></div>
      <div class="newsletter-content">
        <span
          class="material-icons text-primary"
          style="font-size: 3rem; margin-bottom: 1rem"
          >mail_outline</span
        >
        <h2 style="font-size: 2rem; font-weight: 700; margin-bottom: 1rem">
          Únete al Círculo CAP
        </h2>
        <p style="color: #9ca3af; margin-bottom: 2rem">
          Recibe las mejores ofertas y entérate de los nuevos lanzamientos.
        </p>
        <form>
          <input type="email" placeholder="Ingresa tu correo electrónico" />
          <button type="submit" class="btn btn-primary">Suscribirse</button>
        </form>
      </div>
    </section>

    <footer>
      <div class="container">
        <div class="warning-box">
          Tomar bebidas alcohólicas en exceso es dañino. Está prohibido el
          consumo y venta de alcohol a menores de 18 años.
        </div>

        <div class="footer-grid">
          <div>
            <div class="logo" style="margin-bottom: 1rem">
              <span class="material-icons text-primary">local_drink</span>
              <h4 style="font-weight: 800; font-size: 1.25rem">
                CAP <span class="text-primary">BREWERY</span>
              </h4>
            </div>
            <p style="color: var(--text-gray)">
              Llevando las mejores cervezas artesanales a tu mesa.
            </p>
            <div style="display: flex; gap: 1rem; margin-top: 1.5rem">
              <a
                href="https://www.facebook.com"
                target="_blank"
                class="text-gray hover:text-primary"
              >
                <img
                  src="imagenes/iconos/facebook.png"
                  alt="FB"
                  style="width: 24px; opacity: 0.6"
                />
              </a>
              <a href="https://www.whatsapp.com/?lang=es_LA" target="_blank">
                <img
                  src="imagenes/iconos/whatsapp.png"
                  alt="WA"
                  style="width: 24px; opacity: 0.6"
                />
              </a>
              <a href="https://twitter.com/?lang=es" target="_blank">
                <img
                  src="imagenes/iconos/twitter.png"
                  alt="TW"
                  style="width: 24px; opacity: 0.6"
                />
              </a>
            </div>
          </div>

          <div>
            <h4 class="footer-title">Explorar</h4>
            <ul class="footer-links">
              <li><a href="#">Inicio</a></li>
              <li><a href="#">Nuestras Cervezas</a></li>
              <li><a href="#">Promociones</a></li>
            </ul>
          </div>

          <div>
            <h4 class="footer-title">Soporte</h4>
            <ul class="footer-links">
              <li><a href="#">Contáctenos</a></li>
              <li><a href="#">Términos y Condiciones</a></li>
              <li><a href="#">Preguntas Frecuentes</a></li>
            </ul>
          </div>

          <div>
            <h4 class="footer-title">Visítanos</h4>
            <ul class="footer-links">
              <li style="display: flex; gap: 0.5rem">
                <span
                  class="material-icons text-primary"
                  style="font-size: 1.2rem"
                  >location_on</span
                >
                <span>Arequipa, Perú</span>
              </li>
              <li style="display: flex; gap: 0.5rem">
                <span
                  class="material-icons text-primary"
                  style="font-size: 1.2rem"
                  >email</span
                >
                <span>contacto@capbrewery.com</span>
              </li>
            </ul>
          </div>
        </div>

        <div class="copyright">
          <p>
            © Derechos de autor 2023 CAP Brewery. Todos los derechos reservados.
          </p>
          <div style="display: flex; gap: 1rem">
            <span class="material-icons" style="color: #9ca3af"
              >credit_card</span
            >
            <span class="material-icons" style="color: #9ca3af"
              >account_balance</span
            >
          </div>
        </div>
      </div>
    </footer>

    <!-- Carrito Modal (Integrado) -->
    <div id="contCarro" class="carrito" style="display: none">
      <div class="carrito-contenido">
        <span class="cerrar-carro" style="font-size: 2rem; cursor: pointer"
          >&times;</span
        >
        <h2
          style="
            margin-bottom: 1rem;
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
          "
        >
          Tu Carrito
        </h2>

        <div class="carrito-items" style="max-height: 300px; overflow-y: auto">
          <!-- Los items se agregan dinamicamente aquí -->
        </div>

        <div class="carrito-total">
          <div class="fila">
            <strong>Total estimado</strong>
            <span class="carrito-precio-total"> S/. 0.00 </span>
          </div>
          <button type="button" class="btn-pagar">
            Proceder al Pago
            <span
              class="material-icons"
              style="margin-left: 5px; font-size: 1rem"
              >lock</span
            >
          </button>
        </div>
      </div>
    </div>

    <!-- Script de Carrito (Actualizado con LocalStorage) -->
    <script src="javascript/carritoPro.js"></script>

    <script src="javascript/mobileNav.js"></script>
    <script src="javascript/lenguajeS.js"></script>
  </body>
</html>
