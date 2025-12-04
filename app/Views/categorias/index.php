<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Categorías - FocusLearn</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    :root {
      --bg-gradient: linear-gradient(135deg, #a8edea, #fed6e3);
      --card-bg: rgba(255,255,255,0.9);
      --text-color: #333;
      --shadow: rgba(0,0,0,0.1);
      --primary: #3da9fc;
      --accent: #007bff;
    }

    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background: var(--bg-gradient);
      color: var(--text-color);
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    header {
      background: rgba(255,255,255,0.7);
      backdrop-filter: blur(10px);
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 40px;
      box-shadow: 0 4px 10px var(--shadow);
      position: sticky;
      top: 0;
      z-index: 10;
    }

    header h2 {
      font-weight: 700;
      font-size: 22px;
      color: #2a2a2a;
    }

    header a {
      color: #2a2a2a;
      text-decoration: none;
      font-weight: 600;
      transition: color 0.3s;
    }

    header a:hover {
      color: var(--accent);
    }

    main {
      flex: 1;
      text-align: center;
      padding: 60px 20px;
      animation: fadeIn 1s ease-in-out;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    h1 {
      font-size: 38px;
      font-weight: 800;
      margin-bottom: 10px;
    }

    p.subtitle {
      max-width: 650px;
      margin: 0 auto 50px;
      font-size: 18px;
      color: #444;
    }

    .categorias-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 25px;
      max-width: 1000px;
      margin: 0 auto;
    }

    .categoria-card {
      background: var(--card-bg);
      border-radius: 20px;
      box-shadow: 0 8px 20px var(--shadow);
      padding: 30px 20px;
      transition: transform 0.3s, box-shadow 0.3s;
      cursor: pointer;
    }

    .categoria-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 10px 25px rgba(0,0,0,0.2);
    }

    .categoria-card i {
      font-size: 40px;
      margin-bottom: 15px;
      color: var(--primary);
    }

    .categoria-card h3 {
      font-size: 22px;
      font-weight: 700;
      margin-bottom: 10px;
      color: #222;
    }

    .categoria-card p {
      color: #555;
      font-size: 15px;
    }

    footer {
      text-align: center;
      padding: 20px;
      background: rgba(255,255,255,0.6);
      font-size: 14px;
      color: #444;
      border-top: 1px solid rgba(0,0,0,0.1);
    }
  </style>
</head>

<body>
  <header>
    <h2>FocusLearn</h2>
    <a href="<?= base_url('/') ?>"><i class="fa-solid fa-house"></i> Inicio</a>
  </header>

  <main>
    <h1>Explora las Categorías</h1>
    <p class="subtitle">Selecciona una categoría y comienza tu viaje de aprendizaje. ¡Gana experiencia, completa retos y desbloquea logros!</p>

    <div class="categorias-grid">
      <a href="<?= base_url('categorias/historia') ?>" class="categoria-card">
        <i class="fa-solid fa-landmark"></i>
        <h3>Historia</h3>
        <p>Explora civilizaciones, eventos y héroes que marcaron el mundo.</p>
      </a>

      <a href="<?= base_url('categorias/ciencia') ?>" class="categoria-card">
        <i class="fa-solid fa-flask"></i>
        <h3>Ciencia</h3>
        <p>Descubre los misterios del universo, la vida y la materia.</p>
      </a>

      <a href="<?= base_url('categorias/matematicas') ?>" class="categoria-card">
        <i class="fa-solid fa-square-root-variable"></i>
        <h3>Matemáticas</h3>
        <p>Desafía tu mente con lógica, números y patrones.</p>
      </a>

      <a href="<?= base_url('categorias/tecnologia') ?>" class="categoria-card">
        <i class="fa-solid fa-laptop-code"></i>
        <h3>Tecnología</h3>
        <p>Aprende sobre innovación, programación y avances digitales.</p>
      </a>

      <a href="<?= base_url('categorias/geografia') ?>" class="categoria-card">
        <i class="fa-solid fa-globe-americas"></i>
        <h3>Geografía</h3>
        <p>Viaja por el mundo y conoce países, capitales y culturas.</p>
      </a>

      <a href="<?= base_url('categorias/arte') ?>" class="categoria-card">
        <i class="fa-solid fa-palette"></i>
        <h3>Arte & Cultura</h3>
        <p>Explora la música, pintura, literatura y creatividad humana.</p>
      </a>

      <!-- 💥 NUEVO: RETOS DIARIOS -->
      <a href="<?= base_url('retos') ?>" class="categoria-card">
        <i class="fa-solid fa-bolt"></i>
        <h3>Retos Diarios</h3>
        <p>Supera pequeños desafíos cada día para mejorar tu disciplina y enfoque.</p>
      </a>
    </div>
  </main>

  <footer>
    © <?= date('Y') ?> FocusLearn — Aprende cada día ✨
  </footer>
</body>
</html>
