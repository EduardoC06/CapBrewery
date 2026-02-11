<!doctype html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CAP Brewery - Contáctenos</title>

    <link
      href="https://fonts.googleapis.com/css2?family=Epilogue:wght@300;400;500;600;700;800&display=swap"
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
        line-height: 1.5;
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
      .text-center {
        text-align: center;
      }

      /* --- NAVEGACIÓN (Estilo Hoppy Cask + Lógica CAP) --- */
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

      /* --- HEADER SECTION --- */
      .header-section {
        text-align: center;
        margin-bottom: 4rem;
        padding-top: 3rem;
      }
      .subtitle-tag {
        color: var(--primary);
        font-weight: 700;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        font-size: 0.875rem;
        margin-bottom: 0.5rem;
        display: block;
      }
      .main-title {
        font-size: 3rem;
        font-weight: 800;
        color: var(--text-main);
        margin-bottom: 1.5rem;
      }
      .intro-text {
        font-size: 1.125rem;
        color: var(--text-muted);
        max-width: 42rem;
        margin: 0 auto;
      }

      /* --- LAYOUT GRID --- */
      .grid-layout {
        display: grid;
        grid-template-columns: 1fr;
        gap: 4rem;
        padding-bottom: 5rem;
      }
      @media (min-width: 1024px) {
        .grid-layout {
          grid-template-columns: 1fr 1fr;
        }
      }

      /* --- LEFT COLUMN (Info) --- */
      .info-col {
        display: flex;
        flex-direction: column;
        gap: 2rem;
        order: 2;
      }
      @media (min-width: 1024px) {
        .info-col {
          order: 1;
        }
      }

      .map-card {
        background: white;
        border-radius: 0.75rem;
        overflow: hidden;
        height: 20rem;
        position: relative;
        border: 1px solid var(--border);
        box-shadow: var(--shadow);
      }
      .map-card img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        opacity: 0.8;
        transition: 0.5s;
      }
      .map-card:hover img {
        opacity: 1;
      }

      .info-card {
        background: white;
        padding: 1.5rem;
        border-radius: 0.75rem;
        border: 1px solid var(--border);
        box-shadow: var(--shadow);
        transition: 0.3s;
      }
      .info-card:hover {
        border-color: rgba(242, 127, 13, 0.3);
      }
      .card-header {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        margin-bottom: 1rem;
        color: var(--primary);
      }
      .card-header h3 {
        color: var(--text-main);
        font-size: 1.125rem;
        font-weight: 700;
      }

      .hours-list li {
        display: flex;
        justify-content: space-between;
        padding-bottom: 0.5rem;
        margin-bottom: 0.5rem;
        border-bottom: 1px solid var(--bg-light);
        color: var(--text-muted);
        font-size: 0.875rem;
      }
      .hours-list li:last-child {
        border: none;
      }

      .contact-details {
        font-style: normal;
        color: var(--text-muted);
        font-size: 0.875rem;
        line-height: 1.6;
        margin-bottom: 1rem;
      }

      /* --- RIGHT COLUMN (Formulario) --- */
      .form-col {
        order: 1;
      }
      @media (min-width: 1024px) {
        .form-col {
          order: 2;
        }
      }

      .form-container {
        background: white;
        padding: 2.5rem;
        border-radius: 1rem;
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        border: 1px solid rgba(242, 127, 13, 0.1);
        position: relative;
        overflow: hidden;
      }
      /* Decoración */
      .form-decor {
        position: absolute;
        top: 0;
        right: 0;
        width: 8rem;
        height: 8rem;
        background: rgba(242, 127, 13, 0.05);
        border-bottom-left-radius: 100%;
        pointer-events: none;
      }

      .form-title {
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 1.5rem;
        color: var(--text-main);
      }

      .form-group {
        margin-bottom: 1.25rem;
      }
      .form-row {
        display: grid;
        grid-template-columns: 1fr;
        gap: 1.25rem;
        margin-bottom: 1.25rem;
      }
      @media (min-width: 640px) {
        .form-row {
          grid-template-columns: 1fr 1fr;
        }
      }

      .form-label {
        display: block;
        font-size: 0.875rem;
        font-weight: 500;
        margin-bottom: 0.5rem;
        color: var(--text-main);
      }

      .input-wrapper {
        position: relative;
      }
      .input-icon {
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        width: 2.5rem;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #94a3b8;
        pointer-events: none;
      }

      .form-input,
      .form-select,
      .form-textarea {
        width: 100%;
        padding: 0.75rem 1rem 0.75rem 2.5rem; /* Espacio para icono */
        border: 1px solid var(--border);
        border-radius: 0.5rem;
        background: var(--bg-light);
        color: var(--text-main);
        font-family: inherit;
        transition: 0.3s;
      }
      .form-input:focus,
      .form-select:focus,
      .form-textarea:focus {
        outline: none;
        border-color: var(--primary);
        box-shadow: 0 0 0 3px rgba(242, 127, 13, 0.1);
      }
      .form-textarea {
        padding-left: 1rem;
        resize: vertical;
        min-height: 100px;
      }

      .submit-btn {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
        padding: 0.75rem;
        background: var(--primary);
        color: white;
        font-weight: 700;
        border-radius: 0.5rem;
        transition: 0.3s;
      }
      .submit-btn:hover {
        background: var(--primary-hover);
        transform: translateY(-1px);
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

    <main class="container">
      <div class="header-section">
        <span class="subtitle-tag">Soporte al Cliente</span>
        <h1 class="main-title">Contacto</h1>
        <p class="intro-text">
          ¿Tienes algún problema? Por favor, cuéntame cuál es tu pregunta o
          problema en el formulario y estaré encantado de responder. ¡No dudes
          en compartir los detalles para brindarte la mejor ayuda posible!
        </p>
      </div>

      <div class="grid-layout">
        <div class="info-col">
          <div class="map-card">
            <img src="imagenes/contacto2.jpeg" alt="Imagen de Contacto" />
            <div
              style="
                position: absolute;
                inset: 0;
                background: rgba(0, 0, 0, 0.2);
                display: flex;
                align-items: center;
                justify-content: center;
              "
            >
              <div
                style="
                  background: white;
                  padding: 10px;
                  border-radius: 50%;
                  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                "
              >
                <span
                  class="material-icons text-primary"
                  style="font-size: 32px"
                  >place</span
                >
              </div>
            </div>
          </div>

          <div class="info-card">
            <div class="card-header">
              <span class="material-icons">storefront</span>
              <h3>Encuéntranos</h3>
            </div>
            <address class="contact-details">
              Av. La Marina 123<br />
              San Miguel, Lima<br />
              Perú
            </address>
            <div style="display: flex; gap: 10px">
              <span
                class="icon-btn"
                style="background: var(--bg-light); border-radius: 50%"
                ><span class="material-icons text-primary">phone</span></span
              >
              <span style="align-self: center; font-weight: 500"
                >(555) 123-4567</span
              >
            </div>
          </div>

          <div class="info-card">
            <div class="card-header">
              <span class="material-icons">schedule</span>
              <h3>Horario de Atención</h3>
            </div>
            <ul class="hours-list">
              <li><span>Lun - Jue</span> <span>12:00 PM - 10:00 PM</span></li>
              <li><span>Vie - Sáb</span> <span>11:00 AM - 12:00 AM</span></li>
              <li><span>Domingo</span> <span>12:00 PM - 09:00 PM</span></li>
            </ul>
          </div>
        </div>

        <div class="form-col">
          <div class="form-container">
            <div class="form-decor"></div>
            <h2 class="form-title">Envíanos un Mensaje</h2>

            <form action="php/tratamiento_form.php" method="post">
              <div class="form-group">
                <label class="form-label">Nombres</label>
                <div class="input-wrapper">
                  <div class="input-icon">
                    <span class="material-icons">person</span>
                  </div>
                  <input
                    type="text"
                    id="nombres"
                    name="nom"
                    class="form-input"
                    placeholder="Tus nombres"
                  />
                </div>
              </div>

              <div class="form-row">
                <div>
                  <label class="form-label">Apellido Paterno</label>
                  <div class="input-wrapper">
                    <div class="input-icon">
                      <span class="material-icons">person_outline</span>
                    </div>
                    <input
                      type="text"
                      id="apellidoP"
                      name="apel"
                      class="form-input"
                      placeholder="Paterno"
                    />
                  </div>
                </div>
                <div>
                  <label class="form-label">Apellido Materno</label>
                  <div class="input-wrapper">
                    <div class="input-icon">
                      <span class="material-icons">person_outline</span>
                    </div>
                    <input
                      type="text"
                      id="apellidoM"
                      name="apel2"
                      class="form-input"
                      placeholder="Materno"
                    />
                  </div>
                </div>
              </div>

              <div class="form-row">
                <div>
                  <label class="form-label">DNI</label>
                  <div class="input-wrapper">
                    <div class="input-icon">
                      <span class="material-icons">badge</span>
                    </div>
                    <input
                      type="text"
                      id="dni"
                      name="dni"
                      class="form-input"
                      placeholder="########"
                      oninput="consultarDNI()"
                      maxlength="8"
                    />
                  </div>
                </div>
                <div>
                  <label class="form-label">Celular</label>
                  <div class="input-wrapper">
                    <div class="input-icon">
                      <span class="material-icons">smartphone</span>
                    </div>
                    <input
                      type="text"
                      name="numC"
                      class="form-input"
                      placeholder="999 999 999"
                    />
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label class="form-label">Correo Electrónico</label>
                <div class="input-wrapper">
                  <div class="input-icon">
                    <span class="material-icons">email</span>
                  </div>
                  <input
                    type="email"
                    name="corr"
                    class="form-input"
                    placeholder="ejemplo@gmail.com"
                  />
                </div>
              </div>

              <div class="form-row">
                <div>
                  <label class="form-label">Estado Civil</label>
                  <div class="input-wrapper">
                    <div class="input-icon">
                      <span class="material-icons">favorite_border</span>
                    </div>
                    <select id="estadC" name="Estado" class="form-select">
                      <option value="Soltero">Soltero</option>
                      <option value="Casado">Casado</option>
                    </select>
                  </div>
                </div>
                <div>
                  <label class="form-label">Tipo de Mensaje</label>
                  <div class="input-wrapper">
                    <div class="input-icon">
                      <span class="material-icons">category</span>
                    </div>
                    <select id="tipoM" name="Mensaje" class="form-select">
                      <option value="Consulta">Consulta</option>
                      <option value="Solicitud">Solicitud</option>
                      <option value="Reclamo">Reclamo</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label class="form-label">Comentario</label>
                <textarea
                  name="Comentario"
                  class="form-textarea"
                  placeholder="¿En qué podemos ayudarte?"
                ></textarea>
              </div>

              <div class="form-row">
                <input
                  type="reset"
                  class="submit-btn"
                  style="background: #94a3b8"
                  value="Limpiar"
                />
                <button type="submit" name="enviar" class="submit-btn">
                  Enviar Mensaje
                  <span class="material-icons text-sm">send</span>
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
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

    <script>
      // Función original de CAP Brewery para consultar DNI
      function consultarDNI() {
        var dniInput = document.getElementById("dni");
        var nombresInput = document.getElementById("nombres");
        var apellidoPInput = document.getElementById("apellidoP");
        var apellidoMInput = document.getElementById("apellidoM");

        var dni = dniInput.value.trim();

        if (dni.length === 8) {
          var xhr = new XMLHttpRequest();
          xhr.open("POST", "ScriptConsulta.php", true);
          xhr.setRequestHeader(
            "Content-Type",
            "application/x-www-form-urlencoded",
          );

          xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
              try {
                var respuesta = JSON.parse(xhr.responseText);
                nombresInput.value = respuesta.nombres || "";
                apellidoPInput.value = respuesta.apellidoP || "";
                apellidoMInput.value = respuesta.apellidoM || "";
              } catch (e) {
                console.error("Error parseando respuesta DNI");
              }
            }
          };
          xhr.send("DNI=" + dni);
        } else {
          nombresInput.value = "";
          apellidoPInput.value = "";
          apellidoMInput.value = "";
        }
      }
    </script>
    <script src="javascript/mobileNav.js"></script>
    <script src="javascript/animated.js"></script>
    <script src="javascript/lenguajeS.js"></script>
  </body>
</html>
