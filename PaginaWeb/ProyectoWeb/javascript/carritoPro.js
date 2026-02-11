// Variables globales
var cerrarCar = document.querySelector(".cerrar-carro");
var carrito = document.getElementById("contCarro");
var btnAbrirCarrito =
  document.querySelector(".cart-btn") || document.getElementById("content");
var contenedorCarrito = document.querySelector(
  ".carrito-contenido .carrito-items",
);

// Evento para abrir el carrito
if (btnAbrirCarrito) {
  btnAbrirCarrito.addEventListener("click", function (e) {
    // Evita que el click se propague si está dentro de un botón que no queremos
    e.preventDefault();
    carrito.style.display = "block";
  });
}

// Evento para cerrar el carrito
if (cerrarCar) {
  cerrarCar.onclick = function () {
    carrito.style.display = "none";
  };
}

// Cerrar al hacer click fuera
window.onclick = function (event) {
  if (event.target == carrito) {
    carrito.style.display = "none";
  }
};

// Cargar carrito desde LocalStorage al iniciar
document.addEventListener("DOMContentLoaded", () => {
  cargarCarritoDeLocalStorage();
  actualizarTotal();
  agregarEventosBotones();
});

// Función para agregar eventos a los botones de "Agregar al carrito"
function agregarEventosBotones() {
  // Soporte para múltiples clases de botones (diseño nuevo y viejo)
  // .btn-item (viejo), .btn-add (nuevo index), .action-btn (nuevo compra)
  // Usamos delegación de eventos en el documento para manejar elementos dinámicos
  document.body.addEventListener("click", function (event) {
    var target = event.target;
    // Buscar el botón más cercano si se hizo click en el ícono
    var btn = target.closest(".btn-item, .btn-add, .action-btn");

    // Verificar si es un botón de agregar (asegurarse que no sea el de info)
    if (
      btn &&
      (btn.innerText.includes("Agregar") ||
        btn.innerText.includes("Añadir") ||
        btn.querySelector(".material-icons")?.innerText === "add_shopping_cart")
    ) {
      event.preventDefault(); // Prevenir navegación
      agregarAlCarrito(btn);
    }
  });
}

function agregarAlCarrito(button) {
  var producto = button.closest(".productos, .product-card");

  if (!producto) return;

  // Selectores para diferentes diseños
  var imagenSrc = (
    producto.querySelector(".img-producto") ||
    producto.querySelector(".card-image-wrapper img") ||
    producto.querySelector(".card-image img")
  ).src;
  var titulo = (
    producto.querySelector(".nombre") ||
    producto.querySelector(".title") ||
    producto.querySelector(".product-title")
  ).innerText;
  var precioTexto = (
    producto.querySelector(".precio") || producto.querySelector(".price")
  ).innerText;

  // Limpiar precio para obtener solo el número (opcional, pero útil para visualizar)
  // Mantendremos el texto original para mostrarlo en el carrito

  crearItemCarrito(titulo, precioTexto, imagenSrc);
  guardarCarritoEnLocalStorage();
  actualizarTotal();

  // Opcional: Abrir carrito automáticamente al agregar
  carrito.style.display = "block";
}

function crearItemCarrito(titulo, precio, imagenSrc) {
  // Verificar si el item ya existe para aumentar cantidad (opcional, por ahora simple duplicación como estaba)
  // En este caso simple, agregamos uno nuevo.

  var itemDiv = document.createElement("div");
  itemDiv.classList.add("carrito-item");

  var itemContenido = `
        <img src="${imagenSrc}" width="80px" alt="${titulo}">
        <div class="carrito-item-detalles">
            <span class="carrito-item-titulo">${titulo}</span>                
            <span class="carrito-item-precio">${precio}</span>
        </div>
        <span class="btn-eliminar">
            <i class="material-icons">delete</i>
        </span>`;

  itemDiv.innerHTML = itemContenido;

  // Si no existe el contenedor de items (por ejemplo, si se borró el HTML interno), recuperarlo
  var container = document.querySelector(".carrito-contenido .carrito-items");
  if (!container && document.querySelector(".carrito-contenido")) {
    // Crear contenedor si falta
    container = document.createElement("div");
    container.className = "carrito-items";
    // Insertarlo antes del total
    var total = document.querySelector(".carrito-total");
    document.querySelector(".carrito-contenido").insertBefore(container, total);
  }

  if (container) {
    container.appendChild(itemDiv);

    // Agregar evento eliminar al nuevo item
    itemDiv
      .querySelector(".btn-eliminar")
      .addEventListener("click", function () {
        itemDiv.remove();
        actualizarTotal();
        guardarCarritoEnLocalStorage();
      });
  }
}

function actualizarTotal() {
  var total = 0;
  var itemsCarrito = document.getElementsByClassName("carrito-item");

  for (var i = 0; i < itemsCarrito.length; i++) {
    var precioElemento = itemsCarrito[i].getElementsByClassName(
      "carrito-item-precio",
    )[0];
    // Limpiar el string de precio para obtener el número
    // Soporta formatos "S/. 12.00", "S/ 14.00", "S/.12.00"
    var precioTexto = precioElemento.innerText
      .replace("S/.", "")
      .replace("S/", "")
      .replace("/ botella", "")
      .trim();
    var precio = parseFloat(precioTexto);

    if (!isNaN(precio)) {
      total += precio;
    }
  }

  var totalElement = document.querySelector(".carrito-precio-total");
  if (totalElement) {
    totalElement.innerText = "S/. " + total.toFixed(2);
  }

  // Actualizar badge del carrito si existe
  actualizarBadge(itemsCarrito.length);
}

function actualizarBadge(cantidad) {
  var badge = document.querySelector(".cart-badge");
  if (badge) {
    badge.innerText = cantidad;
  }
}

// --- LOCAL STORAGE FUNCTIONS ---

function guardarCarritoEnLocalStorage() {
  var items = [];
  var itemsCarrito = document.getElementsByClassName("carrito-item");

  for (var i = 0; i < itemsCarrito.length; i++) {
    var item = itemsCarrito[i];
    var titulo = item.querySelector(".carrito-item-titulo").innerText;
    var precio = item.querySelector(".carrito-item-precio").innerText;
    var imagenSrc = item.querySelector("img").src;

    items.push({ titulo, precio, imagenSrc });
  }

  localStorage.setItem("carritoCapBrewery", JSON.stringify(items));
}

function cargarCarritoDeLocalStorage() {
  var itemsGuardados = localStorage.getItem("carritoCapBrewery");
  if (itemsGuardados) {
    var items = JSON.parse(itemsGuardados);

    // Limpiar carrito actual visualmente antes de cargar (evitar duplicados si se llama dinámicamente)
    var container = document.querySelector(".carrito-contenido .carrito-items");
    if (container) container.innerHTML = "";

    items.forEach((item) => {
      crearItemCarrito(item.titulo, item.precio, item.imagenSrc);
    });
  }
}

// Envio de datos (Mantenido del original pero comentado o ajustado si no se usaba realmente)
// La función original tenía un fetch a 'productos_Almacenado.php' que parecía incompleto o de prueba.
// Lo mantendremos desactivado para priorizar la funcionalidad visual y de localStorage solicitada.
