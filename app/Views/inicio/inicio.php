<!Doctype html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Focus - Inicio</title>
<link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
<link rel="shortcut icon" href="<?= base_url('img/favicon.png') ?>"type="image/x-icon">
</head>
<body>
  <!-- 🔹 Navbar principal -->
   <nav class="navbar">
  <div class="container">
    <div class="logo">
      <a href="<?= base_url('/') ?>">Focus</a>
    </div>

    <ul class="nav-links">
      <li><a href="<?= base_url('/') ?>">Inicio</a></li>
      <li><a href="<?= base_url('servicios') ?>">Servicios</a></li>
      <li><a href="<?= base_url('acerca') ?>">Acerca</a></li>
      <li><a href="<?= base_url('contacto') ?>">Contacto</a></li>

      <li class="dropdown">
        <button class="dropdown-toggle" type="button">Más opciones ▾</button>
        <ul class="dropdown-menu">
          <li><a href="<?= base_url('categorias') ?>">Categorías</a></li>
          <li><a href="<?= base_url('niveles') ?>">Niveles</a></li>
          <li><a href="<?= base_url('retos') ?>">Retos</a></li>
          <li><a href="<?= base_url('logros') ?>">Logros</a></li>
          <li><a href="<?= base_url('lecciones') ?>">Lecciones</a></li>
          <li><a href="<?= base_url('perfil') ?>">Perfil</a></li>
          <li><a href="<?= base_url('registro') ?>">Registro</a></li>
          <li><a href="<?= base_url('login') ?>">Login</a></li>
          <li><a href="<?= base_url('configuracion') ?>">Configuración</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>


    <!-- Botón Contacto -->
    <a href="#contacto" class="btn-contacto">Contáctanos</a>
  </div>
</nav>

<div class="slider-container">
    <div class="slider-wrapper" id="slider">
        <img src="/public/images/slide1.jpg" alt="Imagen 1">
        <img src="/public/images/slide2.jpg" alt="Imagen 2">
        <img src="/public/images/slide3.jpg" alt="Imagen 3">
        <!-- Añade más <img> si quieres -->
    </div>

    <button class="slider-btn" id="prevBtn" aria-label="Anterior">&#10094;</button>
    <button class="slider-btn" id="nextBtn" aria-label="Siguiente">&#10095;</button>

    <div class="slider-dots" id="dots"></div>
</div>

<style>
/* ===== Navbar general ===== */
.navbar {
  background: #ffffff;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
  padding: 12px 40px;
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  z-index: 100;
}

.navbar-container {
  display: flex;
  align-items: center;
  justify-content: space-between;
  max-width: 1300px;
  margin: 0 auto;
}

/* ===== Logo ===== */
.logo {
  font-size: 1.6rem;
  font-weight: 700;
  color: #111827;
}

/* ===== Enlaces principales ===== */
.nav-links {
  list-style: none;
  display: flex;
  align-items: center;
  gap: 16px;
  margin: 0;
  padding: 0;
}

.nav-links a {
  text-decoration: none;
  font-weight: 600;
  color: #111827;
  padding: 8px 10px;
  transition: 0.3s;
  border-radius: 6px;
}

.nav-links a:hover {
  background-color: #111827;
  color: #ffffff;
}

/* ===== Botón contacto ===== */
.btn-contacto {
  background-color: #38bdf8;
  color: #fff;
  padding: 8px 16px;
  border-radius: 8px;
  text-decoration: none;
  font-weight: 600;
  transition: 0.3s;
}

.btn-contacto:hover {
  background-color: #0284c7;
}

/* ===== Dropdown ===== */
.dropdown {
  position: relative;
}

.dropdown-toggle {
  background: none;
  border: none;
  cursor: pointer;
  font-weight: 600;
  color: #111827;
  padding: 8px 10px;
  border-radius: 6px;
  transition: 0.3s;
}

.dropdown-toggle:hover {
  background-color: #111827;
  color: #ffffff;
}

.dropdown-menu {
  display: none;
  position: absolute;
  top: 35px;
  left: 0;
  background: #ffffff;
  border: 1px solid #ddd;
  border-radius: 8px;
  list-style: none;
  padding: 8px 0;
  min-width: 180px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  z-index: 200;
}

.dropdown-menu.show {
  display: block;
}

.dropdown-menu li {
  text-align: left;
}

.dropdown-menu a {
  display: block;
  padding: 10px 16px;
  color: #111827;
  font-weight: 500;
  text-decoration: none;
  transition: 0.2s;
}

.dropdown-menu a:hover {
  background-color: #111827;
  color: #ffffff;
}

/* ===== Responsivo ===== */
@media (max-width: 900px) {
  .nav-links {
    flex-wrap: wrap;
    justify-content: center;
  }

  .btn-contacto {
    margin-top: 10px;
  }
}
</style>

<!-- 🔽 JavaScript -->
<script>
document.addEventListener("DOMContentLoaded", () => {
  const toggleBtn = document.querySelector(".dropdown-toggle");
  const dropdownMenu = document.querySelector(".dropdown-menu");

  // Mostrar / ocultar menú al hacer clic en "Más opciones"
  toggleBtn.addEventListener("click", (e) => {
    e.stopPropagation();
    dropdownMenu.classList.toggle("show");
  });

  // Cerrar menú al hacer clic fuera
  document.addEventListener("click", (e) => {
    if (!dropdownMenu.contains(e.target) && !toggleBtn.contains(e.target)) {
      dropdownMenu.classList.remove("show");
    }
  });

  // Permitir seleccionar opciones sin que se cierre antes
  dropdownMenu.querySelectorAll("a").forEach((link) => {
    link.addEventListener("click", () => {
      dropdownMenu.classList.remove("show");
    });
  });
});
</script>


  <header class="hero">
    <div class="container hero-inner">
      <div class="hero-text">
        <h1><br /><span>Te ayudamos a no procrastinar</span></h1>
        <p>Somos una herramienta que busca mejorar la calidad de vida de todos</p>
        <div class="hero-cta">
          <a class="btn btn-primary" href="#features">Comenzar</a>
          <a class="btn btn-secondary" href="#about">Saber más</a>
        </div>
      </div>
      <div class="hero-card">
    <button class="slider-btn" id="prevBtn">&#100094;</button>
    <button class="slider-btn" id="nextBtn">&#1095;</button>

    <div class="slider-dots" id="dots"></div>
</div>


<div class="slider-container">
    <div class="slider-wrapper" id="slider">
        <img src="/public/images/slide1.jpg" alt="Imagen 1">
        <img src="/public/images/slide2.jpg" alt="Imagen 2">
        <img src="/public/images/slide3.jpg" alt="Imagen 3">
        <!-- Añade más <img> si quieres -->
    </div>

    <button class="slider-btn" id="prevBtn" aria-label="Anterior">&#10094;</button>
    <button class="slider-btn" id="nextBtn" aria-label="Siguiente">&#10095;</button>

    <div class="slider-dots" id="dots"></div>
</div>

        </div>
      </div>
    </div>
  </header>

  <main>
    <section id="features" class="section features">
      <div class="container">
        <h2 class="section-title">Qué ofrecemos</h2>
        <div class="grid">
          <article class="card">
            <h3>Tiempo</h3>
            <p>Implementación ágil para que alcances tus objetivos en tiempo récord.</p>
          </article>
          <article class="card">
            <h3>Productividad</h3>
            <p>Buenas prácticas y atención .</p>
          </article>
          <article class="card">
            <h3>Actividad</h3>
            <p>Controla tus disciplina.</p>
          </article>
        </div>
      </div>
    </section>

    <section id="about" class="section about">
      <div class="container about-inner">
        <div class="about-text">
          <h2>Acerca de nosotros</h2>
          <p>Somos un equipo pequeño que cree en el poder la disciplina. Nos enfocamos en resultados medibles y en experiencias memorables.</p>
          <a class="btn btn-outline" href="#contact">Hablemos</a>
        </div>
        <div class="about-image">
          <div class="blob">✓</div>
        </div>
      </div>
    </section>

    <section id="contact" class="section contact">
      <div class="container contact-inner">
        <h2>Contáctanos</h2>
        <form class="form">
          <input type="text" placeholder="Tu nombre" required />
          <input type="email" placeholder="Correo" required />
          <textarea placeholder="Mensaje" rows="4"></textarea>
          <button class="btn btn-primary" type="submit">Enviar mensaje</button>
        </form>
      </div>
    </section>
  </main>

  <footer class="footer">
    <div class="container footer-inner">
      <p>© <span id="year"></span> Focus Todos los derechos reservados.</p>
      <div class="socials">
        <a href="#">Política de privacidad </a>
        <a href="#">Términos y condiciones | Ayuda</a>  
      </div>
    </div>
  </footer>

  <script>
    // pequeño script para el año dinámico
    document.getElementById('year').textContent = new Date().getFullYear();

    // mejora simple: cerrar menú móvil si existiera
  </script>
</body>
</html>


