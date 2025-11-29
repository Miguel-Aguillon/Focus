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
   <!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Slider de imágenes</title>
  <style>
    /* Contenedor general del slider */
    .slider-container {
      position: relative;
      width: 100%;
      max-width: 900px;
      margin: auto;
      overflow: hidden;
      border: 1px solid #ccc;
      border-radius: 8px;
    }

    /* Wrapper de las imágenes (flex para slider horizontal) */
    .slider-wrapper {
      display: flex;
      width: 100%;
      transition: transform 0.5s ease-in-out;
    }

    /* Cada imagen ocupa todo el ancho del contenedor */
    .slider-wrapper img {
      width: 100%;
      flex-shrink: 0;
      user-select: none;
      pointer-events: none;
    }

    /* Botones para controlar slider */
    .slider-btn {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background: rgba(0, 0, 0, 0.5);
      color: white;
      border: none;
      padding: 12px 18px;
      font-size: 30px;
      cursor: pointer;
      border-radius: 5px;
      user-select: none;
      z-index: 10;
    }

    #prevBtn {
      left: 10px;
    }

    #nextBtn {
      right: 10px;
    }

    /* Contenedor de puntitos */
    .slider-dots {
      display: flex;
      justify-content: center;
      margin-top: 15px;
    }

    /* Cada puntito */
    .slider-dots span {
      width: 14px;
      height: 14px;
      background: #bbb;
      border-radius: 50%;
      margin: 0 6px;
      cursor: pointer;
      transition: background 0.3s;
    }

    /* Puntito activo */
    .slider-dots .active {
      background: #333;
    }
  </style>
</head>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi sitio</title>

    <!-- ===== CSS ===== -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        /* Slider de imágenes */
        .slider-container {
            position: relative;
            width: 80%;
            max-width: 900px;
            margin: 50px auto;
            overflow: hidden;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
            background: #fff;
        }

        .slider-wrapper {
            display: flex;
            width: 100%;
            transition: transform 0.5s ease-in-out;
        }

        .slider-wrapper img {
            width: 100%;
            flex-shrink: 0;
            user-select: none;
            pointer-events: none;
        }

        .slider-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            padding: 12px 18px;
            font-size: 30px;
            cursor: pointer;
            border-radius: 5px;
            user-select: none;
            z-index: 10;
        }

        #prevBtn { left: 10px; }
        #nextBtn { right: 10px; }

        .slider-dots {
            display: flex;
            justify-content: center;
            margin: 15px 0;
        }

        .slider-dots span {
            width: 14px;
            height: 14px;
            background: #bbb;
            border-radius: 50%;
            margin: 0 6px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .slider-dots .active {
            background: #333;
        }
    </style>
</head>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi sitio</title>

    <!-- ===== CSS ===== -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        /* Slider de imágenes */
        .slider-container {
            position: relative;
            width: 80%;
            max-width: 900px;
            margin: 50px auto;
            overflow: hidden;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
            background: #fff;
        }

        .slider-wrapper {
            display: flex;
            width: 100%;
            transition: transform 0.5s ease-in-out;
        }

        .slider-wrapper img {
            width: 100%;
            flex-shrink: 0;
            user-select: none;
            pointer-events: none;
        }

        .slider-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            padding: 12px 18px;
            font-size: 30px;
            cursor: pointer;
            border-radius: 5px;
            user-select: none;
            z-index: 10;
        }

        #prevBtn { left: 10px; }
        #nextBtn { right: 10px; }

        .slider-dots {
            display: flex;
            justify-content: center;
            margin: 15px 0;
        }

        .slider-dots span {
            width: 14px;
            height: 14px;
            background: #bbb;
            border-radius: 50%;
            margin: 0 6px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .slider-dots .active {
            background: #333;
        }
    </style>
</head>
<body>

    <h1 style="text-align:center; margin-top:30px;">Bienvenido a mi sitio</h1>

    <!-- ===== Slider de imágenes ===== -->
    <div class="slider-container">
        <div class="slider-wrapper" id="slider">
            <img src="img/portada1.jpg" alt="Portada 1" />
            <img src="img/portada2.jpg" alt="Portada 2" />
            <img src="img/portada3.jpg" alt="Portada 3" />
        </div>

        <!-- Botones para navegar -->
        <button class="slider-btn" id="prevBtn">&#10094;</button>
        <button class="slider-btn" id="nextBtn">&#10095;</button>

        <!-- Puntos -->
        <div class="slider-dots" id="dots"></div>
    </div>

    <!-- ===== JavaScript ===== -->
    <script>
        const slider = document.getElementById("slider");
        const prevBtn = document.getElementById("prevBtn");
        const nextBtn = document.getElementById("nextBtn");
        const dotsContainer = document.getElementById("dots");
        const slides = slider.querySelectorAll("img");
        let index = 0;

        // Crear puntos
        slides.forEach((_, i) => {
            const dot = document.createElement("span");
            if(i === 0) dot.classList.add("active");
            dot.addEventListener("click", () => goToSlide(i));
            dotsContainer.appendChild(dot);
        });
        const dots = dotsContainer.querySelectorAll("span");

        // Actualizar slider
        function updateSlider() {
            slider.style.transform = `translateX(-${index * 100}%)`;
            dots.forEach(dot => dot.classList.remove("active"));
            dots[index].classList.add("active");
        }

        // Botones
        function nextSlide() {
            index = (index + 1) % slides.length;
            updateSlider();
        }

        function prevSlide() {
            index = (index - 1 + slides.length) % slides.length;
            updateSlider();
        }

        function goToSlide(i) {
            index = i;
            updateSlider();
        }

        prevBtn.addEventListener("click", prevSlide);
        nextBtn.addEventListener("click", nextSlide);

        // Cambio automático cada 3 segundos
        setInterval(nextSlide, 3000);
    </script>

</body>
</html>



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
        <img src="img/portada1.jpg" alt="Portada 1" />
        <img src="img/portada2.jpg" alt="Portada 2" />
        <img src="img/portada3.jpg" alt="Portada 3" />
        <!-- Añade más <img> si quieres -->
    </div>


      <!-- Botones para cambiar imagen -->
  <button class="slider-btn" id="prevBtn">&#10094;</button>
  <button class="slider-btn" id="nextBtn">&#10095;</button>

  <!-- Puntos debajo del slider -->
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


