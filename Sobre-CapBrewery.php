<!doctype html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CAP Brewery - Nosotros</title>

    <link
      href="https://fonts.googleapis.com/css2?family=Epilogue:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="styles.css" />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />

    <style>
      /* --- VARIABLES Y CONFIGURACIÓN --- */
      :root {
        --primary: #f27f0d;
        --primary-hover: #d96d00;
        --bg-light: #f8f7f5;
        --bg-dark: #221910;
        --chalkboard: #2b2b2b;
        --text-main: #221910;
        --text-light: #e6e0d8;
        --text-gray: #4b5563;
      }

      a {
        text-decoration: none;
        color: inherit;
        transition: 0.3s;
      }
      ul {
        list-style: none;
      }
      img,
      video {
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
      .font-bold {
        font-weight: 700;
      }
      .uppercase {
        text-transform: uppercase;
      }
      .text-center {
        text-align: center;
      }

      .btn {
        display: inline-block;
        padding: 0.75rem 2rem;
        border-radius: 0.5rem;
        font-weight: 600;
        transition: all 0.3s ease;
        border: none;
        cursor: pointer;
      }
      .btn-primary {
        background-color: var(--primary);
        color: white;
        box-shadow: 0 4px 6px rgba(242, 127, 13, 0.2);
      }
      .btn-primary:hover {
        background-color: var(--primary-hover);
        transform: translateY(-2px);
      }

      /* --- TEXTURAS RÚSTICAS --- */
      .rustic-texture {
        position: relative;
      }
      .rustic-texture::before {
        content: "";
        position: absolute;
        inset: 0;
        background-image: url("data:image/svg+xml,%3Csvg viewBox=%220 0 200 200%22 xmlns=%22http://www.w3.org/2000/svg%22%3E%3Cfilter id=%22noiseFilter%22%3E%3CfeTurbulence type=%22fractalNoise%22 baseFrequency=%220.65%22 numOctaves=%223%22 stitchTiles=%22stitch%22/%3E%3C/filter%3E%3Crect width=%22100%25%22 height=%22100%25%22 filter=%22url(%23noiseFilter)%22 opacity=%220.05%22/%3E%3C/svg%3E");
        pointer-events: none;
        z-index: 0;
      }
      .content-relative {
        position: relative;
        z-index: 1;
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
        color: #6b7280;
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
        color: #3f2e1e;
        cursor: pointer;
      }
      .dropdown-content-boton span:hover {
        background-color: #f1f1f1;
        color: var(--primary);
      }
      .dropdownboton:hover .dropdown-content-boton {
        display: block;
      }

      @media (min-width: 768px) {
        .nav-links {
          display: flex;
        }
        .menu-btn {
          display: none;
        }
      }

      /* --- HERO SECTION --- */
      header.hero {
        position: relative;
        height: 70vh;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        background-color: var(--bg-dark);
      }
      .hero-bg {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        opacity: 0.6;
      }
      .hero-content {
        position: relative;
        z-index: 10;
        text-align: center;
        color: white;
        max-width: 800px;
        padding: 20px;
      }
      .hero h1 {
        font-size: 3.5rem;
        font-weight: 800;
        line-height: 1.1;
        text-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
      }
      .badge {
        display: inline-block;
        background: rgba(242, 127, 13, 0.2);
        color: var(--primary);
        border: 1px solid rgba(242, 127, 13, 0.5);
        padding: 5px 15px;
        border-radius: 50px;
        font-size: 0.8rem;
        font-weight: 700;
        text-transform: uppercase;
        margin-bottom: 1.5rem;
        backdrop-filter: blur(5px);
      }

      /* --- SECCIONES ZIG ZAG (Historia & Misión) --- */
      .section-py {
        padding: 6rem 0;
      }

      .grid-split {
        display: grid;
        grid-template-columns: 1fr;
        gap: 4rem;
        align-items: center;
      }
      @media (min-width: 900px) {
        .grid-split {
          grid-template-columns: 1fr 1fr;
        }
      }

      .img-container {
        position: relative;
      }
      .img-container img {
        border-radius: 1rem;
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
        width: 100%;
        height: 400px;
        object-fit: cover;
      }
      /* Decoración detrás de la imagen */
      .img-decor {
        position: absolute;
        top: -15px;
        left: -15px;
        width: 100%;
        height: 100%;
        border: 2px solid rgba(242, 127, 13, 0.3);
        border-radius: 1rem;
        z-index: -1;
        transform: rotate(-2deg);
      }

      .text-content h2 {
        font-size: 0.9rem;
        letter-spacing: 2px;
        color: var(--primary);
        text-transform: uppercase;
        margin-bottom: 0.5rem;
      }
      .text-content h3 {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 1.5rem;
        line-height: 1.2;
      }
      .divider {
        width: 80px;
        height: 6px;
        background-color: var(--primary);
        border-radius: 3px;
        margin-bottom: 1.5rem;
      }
      .text-content p {
        font-size: 1.1rem;
        color: var(--text-gray);
        margin-bottom: 1rem;
      }

      /* --- SECCIÓN PIZARRA (Servicios / Valores) --- */
      .chalkboard-section {
        background-color: var(--chalkboard);
        color: white;
        padding: 6rem 0;
        position: relative;
        background-image: url("https://www.transparenttextures.com/patterns/black-chalk.png");
      }
      .services-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 2rem;
        margin-top: 3rem;
      }
      @media (min-width: 768px) {
        .services-grid {
          grid-template-columns: repeat(3, 1fr);
        }
      }

      .service-card {
        background: rgba(255, 255, 255, 0.05);
        padding: 2rem;
        border-radius: 1rem;
        border: 1px solid rgba(255, 255, 255, 0.1);
        transition: 0.3s;
      }
      .service-card:hover {
        border-color: var(--primary);
        transform: translateY(-5px);
      }
      .icon-circle {
        width: 60px;
        height: 60px;
        background: rgba(242, 127, 13, 0.2);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1.5rem;
        color: var(--primary);
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
        border-radius: 0.75rem; /* var(--radius) might not be defined in Sobre, defaulting to 0.75rem */
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
          <a href="index.php">Inicio</a>
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

    <header class="hero">
      <div class="hero-bg">
        <img
          src="imagenes/barbarin.jpg"
          alt="Fondo Cerveceria"
          class="hero-bg"
        />
      </div>
      <div class="hero-content">
        <span class="badge">Desde 2012</span>
        <h1>Sobre Nosotros</h1>
        <p style="font-size: 1.25rem; margin-top: 1rem; color: #e5e5e5">
          Pasión, calidad y amistad en cada botella.
        </p>
        <div style="margin-top: 2rem">
          <span
            class="material-icons"
            style="font-size: 3rem; opacity: 0.7; animation: bounce 2s infinite"
            >keyboard_arrow_down</span
          >
        </div>
      </div>
    </header>

    <section class="section-py rustic-texture">
      <div class="container content-relative">
        <div class="grid-split">
          <div class="img-container">
            <div class="img-decor"></div>
            <img src="imagenes/cumbres.jpg" alt="Historia CAP Brewery" />
          </div>
          <div class="text-content">
            <h2>Nuestros Inicios</h2>
            <h3>Nuestra Historia</h3>
            <div class="divider"></div>
            <p>
              Somos un grupo de amigos apasionados por la cerveza artesanal que
              decidió emprender una aventura única en el mundo de la cerveza.
            </p>
            <p>
              Juntos, fundaron "CAP Brewery", una empresa distribuidora que se
              convertiría en el destino favorito de los amantes de la cerveza en
              toda la región. Nuestro trabajo es conectar la calidad con la
              experiencia.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="section-py" style="background-color: white">
      <div class="container">
        <div class="grid-split">
          <div class="text-content">
            <h2>Filosofía</h2>
            <h3>Misión y Visión</h3>
            <div class="divider"></div>
            <p>
              <strong>Nuestra Misión:</strong> Ser reconocidos como el epicentro
              de la cultura cervecera artesanal. Queremos que los amantes de la
              cerveza descubran nuevos sabores, apoyen a cervecerías locales y
              creen conexiones significativas.
            </p>
            <p style="margin-top: 1.5rem">
              <strong>Nuestra Visión:</strong> Proporcionar una experiencia
              excepcional. Nos esforzamos por ofrecer la mejor selección de
              proveedores locales y regionales. Creemos en la calidad, la
              autenticidad y la comunidad, para buenos momentos "con patas".
            </p>
          </div>
          <div class="img-container">
            <div
              class="img-decor"
              style="
                transform: rotate(2deg);
                background-color: rgba(242, 127, 13, 0.1);
                border: none;
              "
            ></div>
            <img
              src="https://lh3.googleusercontent.com/aida-public/AB6AXuDWBYQtkakQlqcYiuKdDWHGro8newaQKHUcmEvVqyvwDWms6I37F1Tb0MeNe8TZsqJhpDZ2szliUfugC6tTt_DYG4oQV6_1EAEQvmTH-lQoZzVWduYI6QH_paXlUeGuF0jFYOIzN4Vtv4DPKQ6Xo9bS4rGO_OXDzc7WPIiUG4ePeDAxc08FC0jQWy-Wc6Fv85ApR8mVcKKzdwfVBxWRINl1V9WrYHUMp-_4C7viHI902mXS8KnrQa3qMPVUynR5M01AbIGC10ITyoA"
              alt="Variedad de cervezas"
            />
          </div>
        </div>
      </div>
    </section>

    <section class="chalkboard-section">
      <div class="container">
        <div class="text-center">
          <h2
            style="
              color: var(--primary);
              text-transform: uppercase;
              font-size: 0.9rem;
              letter-spacing: 2px;
            "
          >
            Lo que ofrecemos
          </h2>
          <h3 style="font-size: 2.5rem; font-weight: 700">
            Servicios CAP Brewery
          </h3>
          <p style="color: #9ca3af; max-width: 600px; margin: 1rem auto">
            Comprometidos con nuestros clientes para brindar una experiencia
            inigualable.
          </p>
        </div>

        <div class="services-grid">
          <div class="service-card">
            <div class="icon-circle">
              <span class="material-icons" style="font-size: 32px"
                >two_wheeler</span
              >
            </div>
            <h4
              style="font-size: 1.5rem; margin-bottom: 1rem; font-weight: 700"
            >
              Delivery a Casa
            </h4>
            <p style="color: #9ca3af">
              Contamos con personal motorizado para tus pedidos. Tienen la
              experiencia necesaria para asegurar que tu pedido llegue en
              perfecto estado y bien frío.
            </p>
          </div>

          <div class="service-card">
            <div class="icon-circle">
              <span class="material-icons" style="font-size: 32px"
                >storefront</span
              >
            </div>
            <h4
              style="font-size: 1.5rem; margin-bottom: 1rem; font-weight: 700"
            >
              Atención 24 Horas
            </h4>
            <p style="color: #9ca3af">
              Tenemos atención las 24 horas en nuestra tienda física ubicada en
              Av. La Marina. Siempre listos para atender tu sed de calidad.
            </p>
          </div>

          <div class="service-card">
            <div class="icon-circle">
              <span class="material-icons" style="font-size: 32px"
                >verified</span
              >
            </div>
            <h4
              style="font-size: 1.5rem; margin-bottom: 1rem; font-weight: 700"
            >
              Calidad Garantizada
            </h4>
            <p style="color: #9ca3af">
              Seleccionamos cuidadosamente cada botella. Solo trabajamos con las
              mejores cervecerías artesanales del Perú y el mundo.
            </p>
          </div>
        </div>
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
              <li><a href="index.html">Inicio</a></li>
              <li><a href="Sobre-CapBrewery.html">Nosotros</a></li>
              <li><a href="Compra-CapBrewery.html">Productos</a></li>
            </ul>
          </div>

          <div>
            <h4 class="footer-title">Soporte</h4>
            <ul class="footer-links">
              <li><a href="Contacto-CapBrewery.html">Contáctenos</a></li>
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

    <script src="javascript/mobileNav.js"></script>
    <script src="javascript/lenguajeS.js"></script>
  </body>
</html>
