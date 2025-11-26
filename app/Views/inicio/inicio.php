<!-- index.html -->
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Focus - Inicio</title>
<link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>
  <nav class="nav">
    <div class="container nav-inner">
      <a class="logo" href="#">Focus</a>
      <ul class="nav-links">
        <li><a href="#features">Servicios</a></li>
        <li><a href="#about">Acerca</a></li>
        <li><a href="#contact">Contacto</a></li>
      </ul>
      <a class="btn btn-outline" href="#contact">Contáctanos</a>
    </div>
  </nav>

  <header class="hero">
    <div class="container hero-inner">
      <div class="hero-text">
        <h1>Construye algo hermoso<br /><span>con simplicidad y estilo</span></h1>
        <p>Landing minimalista, enfocada en conversión y lectura clara. Diseño limpio en tonos azul pastel, blanco y negro.</p>
        <div class="hero-cta">
          <a class="btn btn-primary" href="#features">Comenzar</a>
          <a class="btn btn-secondary" href="#about">Saber más</a>
        </div>
      </div>
      <div class="hero-card">
        <div class="phone-mock">
          <div class="screen">Tu producto aquí</div>
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
            <h3>Rápido</h3>
            <p>Implementación ágil para que lances tu idea en tiempo récord.</p>
          </article>
          <article class="card">
            <h3>Seguro</h3>
            <p>Buenas prácticas y atención a la privacidad y la seguridad.</p>
          </article>
          <article class="card">
            <h3>Elegante</h3>
            <p>Diseños limpios y atractivos que conectan con tu público.</p>
          </article>
        </div>
      </div>
    </section>

    <section id="about" class="section about">
      <div class="container about-inner">
        <div class="about-text">
          <h2>Acerca de nosotros</h2>
          <p>Somos un equipo pequeño que cree en el poder del diseño claro y la ejecución eficiente. Nos enfocamos en resultados medibles y en experiencias memorables.</p>
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
      <p>© <span id="year"></span> MiMarca. Todos los derechos reservados.</p>
      <div class="socials">
        <a href="#">Twitter</a>
        <a href="#">LinkedIn</a>
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


