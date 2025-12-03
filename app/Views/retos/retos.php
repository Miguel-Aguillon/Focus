<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Retos - FocusLearn</title>

  <!-- Iconos -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <style>
    /* ---------- RESET ---------- */
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #ffffff, #A7C7E7);
      color: #000;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    /* ---------- HEADER ---------- */
    header {
      background: rgba(255, 255, 255, 0.8);
      backdrop-filter: blur(10px);
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
      padding: 15px 40px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    header h2 {
      font-weight: 700;
      font-size: 22px;
    }

    header a {
      color: #000;
      font-weight: 600;
      text-decoration: none;
      transition: 0.3s;
    }

    header a:hover {
      color: #007bff;
    }

    /* ---------- CONTENIDO PRINCIPAL ---------- */
    main {
      flex: 1;
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 60px 20px;
      animation: fadeIn 1s ease-in-out;
    }

    @keyframes fadeIn {
      from {opacity: 0; transform: translateY(20px);}
      to {opacity: 1; transform: translateY(0);}
    }

    h1 {
      font-size: 36px;
      font-weight: 700;
      margin-bottom: 10px;
      text-align: center;
      color: #000;
    }

    p.subtitle {
      text-align: center;
      max-width: 700px;
      font-size: 16px;
      color: #333;
      margin-bottom: 40px;
    }

    /* ---------- GRID DE RETOS ---------- */
    .retos-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 25px;
      width: 100%;
      max-width: 1000px;
    }

    /* ---------- TARJETAS ---------- */
    .reto-card {
      background: rgba(255, 255, 255, 0.85);
      border-radius: 20px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
      padding: 30px 25px;
      transition: all 0.3s ease;
      backdrop-filter: blur(10px);
      text-align: left;
      cursor: pointer;
    }

    .reto-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
    }

    .reto-card i {
      font-size: 40px;
      color: #000;
      margin-bottom: 15px;
    }

    .reto-card h3 {
      font-size: 22px;
      margin-bottom: 10px;
      color: #000;
    }

    .reto-card p {
      color: #333;
      font-size: 15px;
      margin-bottom: 20px;
      line-height: 1.5;
    }

    /* ---------- BOTÓN ---------- */
    .btn-completar {
      display: inline-block;
      padding: 10px 20px;
      background: #000;
      color: #fff;
      font-weight: 600;
      border-radius: 8px;
      text-decoration: none;
      transition: 0.3s ease;
    }

    .btn-completar:hover {
      background: #333;
      transform: scale(1.05);
    }

    /* ---------- FOOTER ---------- */
    footer {
      text-align: center;
      padding: 15px 0;
      font-size: 14px;
      color: #333;
      background: rgba(255,255,255,0.7);
      border-top: 1px solid #ccc;
    }

    /* ---------- RESPONSIVE ---------- */
    @media (max-width: 480px) {
      h1 {
        font-size: 28px;
      }
      p.subtitle {
        font-size: 14px;
      }
    }
  </style>
</head>

<body>

  <header>
    <h2>FocusLearn</h2>
    <a href="<?= base_url('/') ?>"><i class="fa-solid fa-house"></i> Inicio</a>
  </header>

  <main>

    <h1>Retos del Día</h1>
    <p class="subtitle">
      Supera estos desafíos para mejorar tu enfoque y mantener tu racha sin procrastinar.
    </p>

    <div class="retos-grid">

      <div class="reto-card">
        <i class="fa-solid fa-stopwatch"></i>
        <h3>Reto 1: 25 Minutos Enfocado</h3>
        <p>Realiza una sesión de concentración sin interrupciones usando técnica Pomodoro.</p>
        <a href="#" class="btn-completar">Completar reto</a>
      </div>

      <div class="reto-card">
        <i class="fa-solid fa-list-check"></i>
        <h3>Reto 2: Lista de 3 tareas</h3>
        <p>Define y completa al menos tres tareas importantes del día.</p>
        <a href="#" class="btn-completar">Completar reto</a>
      </div>

      <div class="reto-card">
        <i class="fa-solid fa-brain"></i>
        <h3>Reto 3: Mini prueba de memoria</h3>
        <p>Ejercita tu mente con un ejercicio de memoria rápida.</p>
        <a href="#" class="btn-completar">Completar reto</a>
      </div>

      <div class="reto-card">
        <i class="fa-solid fa-bolt"></i>
        <h3>Reto 4: Sin redes por 1 hora</h3>
        <p>Desconéctate del celular y redes sociales durante una hora completa.</p>
        <a href="#" class="btn-completar">Completar reto</a>
      </div>

      <div class="reto-card">
        <i class="fa-solid fa-book-open-reader"></i>
        <h3>Reto 5: Lección recomendada</h3>
        <p>Abre una lección al azar y aprende algo nuevo hoy.</p>
        <a href="#" class="btn-completar">Completar reto</a>
      </div>

    </div>
  </main>

  <footer>
    © <?= date('Y') ?> FocusLearn. Todos los derechos reservados.
  </footer>

</body>

</html>
