document.addEventListener("DOMContentLoaded", function () {
  var toggle =
    document.querySelector(".nav-toggle") ||
    document.querySelector(".menu-btn");
  var enlaces =
    document.querySelector(".enlaces") || document.querySelector(".nav-links");

  if (!toggle || !enlaces) return;

  toggle.addEventListener("click", function (e) {
    var expanded = this.getAttribute("aria-expanded") === "true";
    this.setAttribute("aria-expanded", (!expanded).toString());
    enlaces.classList.toggle("mobile-open");
  });

  // Close menu when clicking outside
  document.addEventListener("click", function (e) {
    if (!enlaces.classList.contains("mobile-open")) return;
    var target = e.target;
    if (!enlaces.contains(target) && !toggle.contains(target)) {
      enlaces.classList.remove("mobile-open");
      toggle.setAttribute("aria-expanded", "false");
    }
  });

  // Ensure correct state on resize
  window.addEventListener("resize", function () {
    if (window.innerWidth > 768) {
      enlaces.classList.remove("mobile-open");
      if (toggle) toggle.setAttribute("aria-expanded", "false");
    }
  });
});
