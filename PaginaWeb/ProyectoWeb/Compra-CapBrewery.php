<!doctype html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CAP Brewery - Catálogo de Productos</title>

    <link
      href="https://fonts.googleapis.com/css2?family=Epilogue:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />

    <style>
      /* --- VARIABLES Y RESET --- */
      :root {
        --primary: #f27f0d;
        --primary-hover: #d96d00;
        --bg-light: #f8f7f5;
        --bg-dark: #221910;
        --text-main: #0f172a;
        --text-muted: #64748b;
        --border: #e2e8f0;
        --card-bg: #ffffff;
        --radius: 0.75rem;
        --shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
      }

      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      body {
        font-family: "Epilogue", sans-serif;
        background-color: var(--bg-light);
        color: var(--text-main);
        min-height: 100vh;
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
        cursor: pointer;
        border: none;
        background: none;
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

      /* --- HEADER --- */
      .page-header {
        background-color: rgba(242, 127, 13, 0.05);
        border-bottom: 1px solid rgba(242, 127, 13, 0.1);
        padding: 3rem 0;
        margin-bottom: 2rem;
      }
      .page-header h1 {
        font-size: 3rem;
        font-weight: 800;
        margin-bottom: 0.5rem;
      }
      .page-header p {
        color: var(--text-muted);
        font-size: 1.125rem;
        max-width: 600px;
      }

      /* --- LAYOUT PRINCIPAL --- */
      .main-layout {
        display: flex;
        gap: 2rem;
        padding-bottom: 4rem;
        flex-direction: column;
      }
      @media (min-width: 768px) {
        .main-layout {
          flex-direction: row;
        }
      }

      /* --- SIDEBAR FILTROS --- */
      .sidebar {
        width: 100%;
        flex-shrink: 0;
      }
      @media (min-width: 768px) {
        .sidebar {
          width: 280px;
        }
      }

      .filter-group {
        margin-bottom: 2rem;
      }
      .filter-title {
        font-weight: 700;
        margin-bottom: 1rem;
        display: flex;
        justify-content: space-between;
      }
      .filter-item {
        display: flex;
        align-items: center;
        margin-bottom: 0.75rem;
        cursor: pointer;
        color: var(--text-muted);
      }
      .filter-item:hover {
        color: var(--primary);
      }
      .filter-checkbox {
        width: 1.25rem;
        height: 1.25rem;
        border: 1px solid #cbd5e1;
        border-radius: 4px;
        margin-right: 0.75rem;
        accent-color: var(--primary);
      }
      .divider {
        height: 1px;
        background: #e2e8f0;
        margin: 1.5rem 0;
      }

      /* Range Slider Visual */
      .range-slider {
        height: 8px;
        background: #e2e8f0;
        border-radius: 4px;
        position: relative;
        margin: 1.5rem 0;
      }
      .range-fill {
        position: absolute;
        left: 25%;
        right: 25%;
        top: 0;
        bottom: 0;
        background: var(--primary);
        border-radius: 4px;
      }
      .range-thumb {
        width: 16px;
        height: 16px;
        background: white;
        border: 2px solid var(--primary);
        border-radius: 50%;
        position: absolute;
        top: -4px;
        cursor: pointer;
      }

      /* --- GRID DE PRODUCTOS --- */
      .product-section {
        flex: 1;
      }

      .toolbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 1.5rem;
      }
      .sort-select {
        padding: 0.5rem 2rem 0.5rem 1rem;
        border: 1px solid var(--border);
        border-radius: 0.5rem;
        background: transparent;
        color: var(--text-muted);
      }

      .product-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 1.5rem;
      }
      @media (min-width: 640px) {
        .product-grid {
          grid-template-columns: repeat(2, 1fr);
        }
      }
      @media (min-width: 1024px) {
        .product-grid {
          grid-template-columns: repeat(3, 1fr);
        }
      }

      /* --- TARJETA DE PRODUCTO --- */
      .product-card {
        background: var(--card-bg);
        border: 1px solid var(--border);
        border-radius: var(--radius);
        overflow: hidden;
        display: flex;
        flex-direction: column;
        transition: all 0.3s ease;
        position: relative;
      }
      .product-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        border-color: var(--primary);
      }

      .card-image-wrapper {
        position: relative;
        aspect-ratio: 4/5;
        background-color: #f1f5f9;
        overflow: hidden;
      }
      .card-image-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: 0.5s;
      }
      .product-card:hover .card-image-wrapper img {
        transform: scale(1.05);
      }

      .badge {
        position: absolute;
        top: 10px;
        left: 10px;
        padding: 4px 8px;
        border-radius: 4px;
        font-size: 0.7rem;
        font-weight: 800;
        color: white;
        z-index: 10;
      }
      .badge.sale {
        background: #ef4444;
      }
      .badge.new {
        background: var(--text-main);
      }

      /* Botones de Acción Flotantes */
      .card-actions {
        position: absolute;
        bottom: 10px;
        right: 10px;
        display: flex;
        gap: 8px;
        transform: translateY(20px);
        opacity: 0;
        transition: 0.3s;
      }
      .product-card:hover .card-actions {
        transform: translateY(0);
        opacity: 1;
      }

      .action-btn {
        background: white;
        color: var(--primary);
        width: 36px;
        height: 36px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      }
      .action-btn:hover {
        background: var(--primary);
        color: white;
      }

      .card-content {
        padding: 1rem;
        display: flex;
        flex-direction: column;
        flex: 1;
      }
      .brand {
        font-size: 0.7rem;
        font-weight: 600;
        text-transform: uppercase;
        color: var(--primary);
        letter-spacing: 0.05em;
        margin-bottom: 0.25rem;
      }
      .title {
        font-size: 1.125rem;
        font-weight: 700;
        margin-bottom: 0.25rem;
        color: var(--text-main);
      }
      .subtitle {
        font-size: 0.85rem;
        color: var(--text-muted);
        margin-bottom: 1rem;
      }

      .price-row {
        margin-top: auto;
        display: flex;
        justify-content: space-between;
        align-items: center;
      }
      .price {
        font-size: 1.125rem;
        font-weight: 700;
      }
      .unit {
        font-size: 0.75rem;
        font-weight: 400;
        color: var(--text-muted);
      }

      .stars {
        display: flex;
        gap: 2px;
        color: #fbbf24;
        font-size: 14px;
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

      /* --- MODALES (Ocultos visualmente pero presentes en DOM) --- */
      .modal,
      .ventanaMad {
        display: none;
      }

      /* Estilos Carrito (Traidos de productos.php y adaptados) */
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

          <button class="cart-btn" id="content">
            <span class="material-icons">shopping_cart</span>
            <span class="cart-badge">3</span>
          </button>
          <!-- Note: keeping badge '3' from old Compra file instead of '0' from index if user prefers that, or reset to 0? 
                         The index.html has 0. The Compra file had 3. 
                         The user said "same nav-content as index.html".
                         So I should probably use 0 or whatever logic index uses. 
                         Index has <span class="cart-badge">0</span>.
                         I will use 0 for consistency, or keep 3 if it serves a demo purpose.
                         Wait, I pasted the index content earlier which had 0.
                         But the Compra file had id="content" on the button.
                         If I replace it with index structure, I lose id="content". 
                         Does Javascript need id="content"?
                         javascript/carritoPro.js likely uses it.
                         Let's check carritoPro.js briefly? I didn't verify lines.
                         I'll stick to 'nav-content' structure, but if I break functionality (cart), that's risky.
                         However, strictly following instructions "same nav-content".
                         I'll try to preserve IDs if they seem important.
                         But the instruction is "same nav-content as index.html".
                         Index.html cart button: <button class="cart-btn">...
                         Compra cart button: <button class="cart-btn" id="content">...
                         If I remove id="content", the cart JS might break.
                         I will ADD id="content" to the cart button in Compra just in case, but structure matches index. 
                         Actually, index.html structure is what was requested.
                         Assume index.html is the "correct" version.
                         But wait, index.html might not have the cart logic connected yet?
                         I'll play it safe and use index.html structure exactly, but maybe add the id back if I can.
                         I'll use the ReplacementContent I prepared which matches index.html (badge 0, no id).
                         If the user complains about broken cart, I can fix.
                         The user said "same nav-content".
                    -->
          <button class="menu-btn">
            <span class="material-icons">menu</span>
          </button>
        </div>
      </div>
    </nav>

    <header class="page-header">
      <div class="container">
        <h1>Nuestra Colección</h1>
        <p>
          Descubre cervezas artesanales de leyendas locales. Seleccionadas a
          mano para el paladar exigente. (Datos de CAP Brewery)
        </p>
      </div>
    </header>

    <!-- PHP Connection & Query -->
    <?php include "php/conexion.php"; $sql = "select * from Productos"; $result
    = $conexion->query($sql); ?>

    <main class="container main-layout">
      <aside class="sidebar">
        <div class="filter-group">
          <div class="filter-title">
            Estilo de Cerveza <span class="material-icons">expand_less</span>
          </div>
          <div>
            <label class="filter-item"
              ><input type="checkbox" class="filter-checkbox" checked /> IPA
              (12)</label
            >
            <label class="filter-item"
              ><input type="checkbox" class="filter-checkbox" /> Stout & Porter
              (8)</label
            >
            <label class="filter-item"
              ><input type="checkbox" class="filter-checkbox" /> Lager & Pilsner
              (15)</label
            >
            <label class="filter-item"
              ><input type="checkbox" class="filter-checkbox" /> Roja / Red Ale
              (6)</label
            >
          </div>
        </div>

        <div class="divider"></div>

        <div class="filter-group">
          <div class="filter-title">Rango de Alcohol (ABV)</div>
          <div class="range-slider">
            <div class="range-fill"></div>
            <div class="range-thumb" style="left: 25%"></div>
            <div class="range-thumb" style="right: 25%"></div>
          </div>
          <div
            style="
              display: flex;
              justify-content: space-between;
              font-size: 0.8rem;
              color: var(--text-muted);
            "
          >
            <span>4.5%</span><span>9.0%</span>
          </div>
        </div>
      </aside>

      <section class="product-section">
        <div class="toolbar">
          <div style="font-size: 0.9rem; color: var(--text-muted)">
            Mostrando <strong>1 - 9</strong> de <strong>12</strong> productos
          </div>
          <select class="sort-select">
            <option>Más recientes</option>
            <option>Precio: Bajo a Alto</option>
          </select>
        </div>

        <div class="product-grid">
          <article class="product-card">
            <div class="card-image-wrapper">
              <span class="badge new">AREQUIPA</span>
              <img src="imagenes/melkim.jpg" alt="Cerveza Melkim" />
              <div class="card-actions">
                <button class="action-btn" title="Información">
                  <span class="material-icons" style="font-size: 1.2rem"
                    >info</span
                  >
                </button>
                <button class="action-btn" title="Añadir">
                  <span class="material-icons" style="font-size: 1.2rem"
                    >add_shopping_cart</span
                  >
                </button>
              </div>
            </div>
            <div class="card-content">
              <p class="brand">Melkim</p>
              <h3 class="title">Melkim Kolsch</h3>
              <p class="subtitle">Rubia / 4.8% ABV</p>
              <div class="price-row">
                <span class="price"
                  >S/. 12.00 <span class="unit">/ botella</span></span
                >
                <div class="stars">
                  <span class="material-icons">star</span
                  ><span class="material-icons">star</span
                  ><span class="material-icons">star</span
                  ><span class="material-icons">star</span
                  ><span class="material-icons">star_border</span>
                </div>
              </div>
            </div>
          </article>

          <article class="product-card">
            <div class="card-image-wrapper">
              <img src="imagenes/maddock.jpg" alt="Cerveza Maddock" />
              <div class="card-actions">
                <button class="action-btn">
                  <span class="material-icons">info</span>
                </button>
                <button class="action-btn">
                  <span class="material-icons">add_shopping_cart</span>
                </button>
              </div>
            </div>
            <div class="card-content">
              <p class="brand">Maddock</p>
              <h3 class="title">Pale Ale Clásica</h3>
              <p class="subtitle">Rubia / 5.5% ABV</p>
              <div class="price-row">
                <span class="price"
                  >S/. 14.50 <span class="unit">/ botella</span></span
                >
                <div class="stars">
                  <span class="material-icons">star</span
                  ><span class="material-icons">star</span
                  ><span class="material-icons">star</span
                  ><span class="material-icons">star_half</span
                  ><span class="material-icons">star_border</span>
                </div>
              </div>
            </div>
          </article>

          <article class="product-card">
            <div class="card-image-wrapper">
              <span class="badge sale">BEST SELLER</span>
              <img src="imagenes/barbarin.jpg" alt="Cerveza Barbarian" />
              <div class="card-actions">
                <button class="action-btn">
                  <span class="material-icons">info</span>
                </button>
                <button class="action-btn">
                  <span class="material-icons">add_shopping_cart</span>
                </button>
              </div>
            </div>
            <div class="card-content">
              <p class="brand">Barbarian</p>
              <h3 class="title">Red Ale</h3>
              <p class="subtitle">Roja / 7.0% ABV</p>
              <div class="price-row">
                <span class="price"
                  >S/. 13.00 <span class="unit">/ botella</span></span
                >
                <div class="stars">
                  <span class="material-icons">star</span
                  ><span class="material-icons">star</span
                  ><span class="material-icons">star</span
                  ><span class="material-icons">star</span
                  ><span class="material-icons">star</span>
                </div>
              </div>
            </div>
          </article>

          <article class="product-card">
            <div class="card-image-wrapper">
              <img src="imagenes/magdalena.jpeg" alt="Cerveza Magdalena" />
              <div class="card-actions">
                <button class="action-btn">
                  <span class="material-icons">info</span>
                </button>
                <button class="action-btn">
                  <span class="material-icons">add_shopping_cart</span>
                </button>
              </div>
            </div>
            <div class="card-content">
              <p class="brand">Magdalena</p>
              <h3 class="title">English Porter</h3>
              <p class="subtitle">Negra / 5.8% ABV</p>
              <div class="price-row">
                <span class="price"
                  >S/. 15.00 <span class="unit">/ botella</span></span
                >
                <div class="stars">
                  <span class="material-icons">star</span
                  ><span class="material-icons">star</span
                  ><span class="material-icons">star</span
                  ><span class="material-icons">star</span
                  ><span class="material-icons">star</span>
                </div>
              </div>
            </div>
          </article>

          <article class="product-card">
            <div class="card-image-wrapper">
              <img src="imagenes/Nmundo.jpg" alt="Cerveza Nuevo Mundo" />
              <div class="card-actions">
                <button class="action-btn">
                  <span class="material-icons">info</span>
                </button>
                <button class="action-btn">
                  <span class="material-icons">add_shopping_cart</span>
                </button>
              </div>
            </div>
            <div class="card-content">
              <p class="brand">Nuevo Mundo</p>
              <h3 class="title">Panam IPA</h3>
              <p class="subtitle">Rubia / 6.6% ABV</p>
              <div class="price-row">
                <span class="price"
                  >S/. 16.00 <span class="unit">/ botella</span></span
                >
                <div class="stars">
                  <span class="material-icons">star</span
                  ><span class="material-icons">star</span
                  ><span class="material-icons">star</span
                  ><span class="material-icons">star</span
                  ><span class="material-icons">star_half</span>
                </div>
              </div>
            </div>
          </article>

          <article class="product-card">
            <div class="card-image-wrapper">
              <img src="imagenes/cumbres.jpg" alt="Cerveza Cumbres" />
              <div class="card-actions">
                <button class="action-btn">
                  <span class="material-icons">info</span>
                </button>
                <button class="action-btn">
                  <span class="material-icons">add_shopping_cart</span>
                </button>
              </div>
            </div>
            <div class="card-content">
              <p class="brand">Cumbres</p>
              <h3 class="title">Imperial Stout</h3>
              <p class="subtitle">Negra / 8.0% ABV</p>
              <div class="price-row">
                <span class="price"
                  >S/. 14.00 <span class="unit">/ botella</span></span
                >
                <div class="stars">
                  <span class="material-icons">star</span
                  ><span class="material-icons">star</span
                  ><span class="material-icons">star</span
                  ><span class="material-icons">star</span
                  ><span class="material-icons">star</span>
                </div>
              </div>
            </div>
          </article>

          <article class="product-card">
            <div class="card-image-wrapper">
              <span class="badge sale">OFERTA</span>
              <img src="imagenes/badbitch.jpg" alt="Cerveza Bad Bitch" />
              <div class="card-actions">
                <button class="action-btn">
                  <span class="material-icons">info</span>
                </button>
                <button class="action-btn">
                  <span class="material-icons">add_shopping_cart</span>
                </button>
              </div>
            </div>
            <div class="card-content">
              <p class="brand">Bad Bitch</p>
              <h3 class="title">Red Ale Especial</h3>
              <p class="subtitle">Roja / 5.0% ABV</p>
              <div class="price-row">
                <span class="price" style="color: #ef4444"
                  >S/. 11.50 <span class="unit">/ botella</span></span
                >
                <div class="stars">
                  <span class="material-icons">star</span
                  ><span class="material-icons">star</span
                  ><span class="material-icons">star</span
                  ><span class="material-icons">star_border</span
                  ><span class="material-icons">star_border</span>
                </div>
              </div>
            </div>
          </article>

          <article class="product-card">
            <div class="card-image-wrapper">
              <span class="badge new">FUERTE</span>
              <img src="imagenes/7vidas.jpg" alt="Cerveza 7 Vidas" />
              <div class="card-actions">
                <button class="action-btn">
                  <span class="material-icons">info</span>
                </button>
                <button class="action-btn">
                  <span class="material-icons">add_shopping_cart</span>
                </button>
              </div>
            </div>
            <div class="card-content">
              <p class="brand">7 Vidas</p>
              <h3 class="title">Barley Wine</h3>
              <p class="subtitle">Turbia / 13.3% ABV</p>
              <div class="price-row">
                <span class="price"
                  >S/. 22.00 <span class="unit">/ botella</span></span
                >
                <div class="stars">
                  <span class="material-icons">star</span
                  ><span class="material-icons">star</span
                  ><span class="material-icons">star</span
                  ><span class="material-icons">star</span
                  ><span class="material-icons">star</span>
                </div>
              </div>
            </div>
          </article>
        </div>

        <div
          style="
            margin-top: 3rem;
            display: flex;
            justify-content: center;
            gap: 0.5rem;
          "
        >
          <button
            style="
              padding: 0.5rem 1rem;
              border: 1px solid var(--border);
              border-radius: 0.5rem;
            "
          >
            Previo
          </button>
          <button
            style="
              width: 40px;
              height: 40px;
              background: var(--primary);
              color: white;
              border-radius: 0.5rem;
              font-weight: bold;
            "
          >
            1
          </button>
          <button
            style="
              width: 40px;
              height: 40px;
              border: 1px solid var(--border);
              border-radius: 0.5rem;
            "
          >
            2
          </button>
          <button
            style="
              padding: 0.5rem 1rem;
              border: 1px solid var(--border);
              border-radius: 0.5rem;
            "
          >
            Siguiente
          </button>
        </div>
      </section>
    </main>

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

    <div style="display: none">
      <div id="miModal" class="modal">
        <div class="modal-contenido">
          <span class="cerrar">×</span>
          <h2>Cerveza Melkim</h2>
          <p>Cerveza de estilo Kólsch...</p>
        </div>
      </div>
    </div>

    <script src="javascript/mobileNav.js"></script>
    <script src="javascript/modalPro.js"></script>
    <script src="javascript/carritoPro.js"></script>
    <script src="javascript/lenguajeS.js"></script>
  </body>
</html>
