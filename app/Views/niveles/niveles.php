<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Niveles - FocusLearn</title>
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
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
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

    /* ---------- GRID DE NIVELES ---------- */
    .niveles-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 25px;
      width: 100%;
      max-width: 1000px;
    }

    /* ---------- TARJETAS ---------- */
    .nivel-card {
      background: rgba(255, 255, 255, 0.85);
      border-radius: 20px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
      padding: 30px 25px;
      text-align: center;
      transition: all 0.3s ease;
      backdrop-filter: blur(10px);
      cursor: pointer;
    }

    .nivel-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
    }

    .nivel-card i {
      font-size: 45px;
      color: #000;
      margin-bottom: 15px;
    }

    .nivel-card h3 {
      font-size: 22px;
      margin-bottom: 10px;
      color: #000;
    }

    .nivel-card p {
      color: #333;
      font-size: 15px;
      margin-bottom: 15px;
      line-height: 1.5;
    }

    /* ---------- BOTÓN ---------- */
    .btn-iniciar {
      margin-top: 5px;
      display: inline-block;
      padding: 10px 20px;
      background: #000;
      color: #fff;
      font-weight: 600;
      border-radius: 8px;
      text-decoration: none;
      transition: 0.3s ease;
    }

    .btn-iniciar:hover {
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
    <h1>Niveles de Aprendizaje</h1>
    <p class="subtitle">
      En FocusLearn te acompañamos paso a paso. Cada nivel representa un nuevo reto para mejorar tu enfoque y tus hábitos de aprendizaje.
    </p>

    <div class="niveles-grid">
      <div class="nivel-card">
        <i class="fa-solid fa-seedling"></i>
        <h3>Nivel 1: Principiante</h3>
        <p>Descubre lo básico con preguntas de cultura general y ejercicios simples para activar tu mente.</p>
        <a href="<?= base_url('niveles/principiante') ?>" class="btn-iniciar">Comenzar</a>
      </div>

      <div class="nivel-card">
        <i class="fa-solid fa-fire"></i>
        <h3>Nivel 2: Intermedio</h3>
        <p>Desafía tus conocimientos con retos más profundos que pondrán a prueba tu análisis y concentración.</p>
        <a href="<?= base_url('niveles/intermedio') ?>" class="btn-iniciar">Comenzar</a>
      </div>

      <div class="nivel-card">
        <i class="fa-solid fa-mountain"></i>
        <h3>Nivel 3: Avanzado</h3>
        <p>Enfrenta desafíos de alta dificultad diseñados para potenciar tu rendimiento al máximo nivel.</p>
        <a href="<?= base_url('niveles/avanzado') ?>" class="btn-iniciar">Comenzar</a>
      </div>
    </div>
  </main>

  <footer>
    © <?= date('Y') ?> FocusLearn. Todos los derechos reservados.
  </footer>

</body>
</html>
