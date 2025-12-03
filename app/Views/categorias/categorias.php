<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Categorías - FocusLearn</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #ffffff, #A7C7E7);
      color: #000;
      margin: 0;
    }

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
    }

    header a:hover { color: #007bff; }

    main {
      padding: 60px 20px;
      text-align: center;
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
    }

    p.subtitle {
      max-width: 700px;
      margin: 0 auto 40px;
      font-size: 16px;
      color: #333;
    }

    .lecciones-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 25px;
      max-width: 1000px;
      margin: 0 auto;
    }

    .leccion-card {
      background: rgba(255, 255, 255, 0.85);
      border-radius: 20px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
      padding: 25px;
      transition: 0.3s;
    }

    .leccion-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
    }

    .leccion-card h3 { color: #000; }
    .leccion-card p { color: #444; }

    .btn {
      display: inline-block;
      margin-top: 10px;
      background: #000;
      color: #fff;
      padding: 10px 20px;
      border-radius: 10px;
      text-decoration: none;
      transition: 0.3s;
    }

    .btn:hover {
      background: #333;
      transform: scale(1.05);
    }

    footer {
      text-align: center;
      padding: 15px;
      font-size: 14px;
      background: rgba(255,255,255,0.7);
      border-top: 1px solid #ccc;
    }
  </style>
</head>

<body>
  <header>
    <h2>FocusLearn</h2>
    <a href="<?= base_url('categorias') ?>"><i class="fa-solid fa-arrow-left"></i> Volver</a>
  </header>

  <main>
    <h1><?= esc($categorias) ?></h1>
    <p class="subtitle"><?= esc($descripcion) ?></p>

    <div class="lecciones-grid">
      <?php foreach ($lecciones as $l): ?>
        <div class="leccion-card">
          <h3><?= esc($l['titulo']) ?></h3>
          <p>Nivel: <?= esc($l['nivel']) ?></p>
          <?php if (strtolower($categorias) === 'historia'): ?>
    <a href="<?= base_url('quiz/historia') ?>" class="btn">Iniciar Lección</a>
<?php else: ?>
    <a href="#" class="btn">Iniciar Lección</a>
<?php endif; ?>

        </div>
      <?php endforeach; ?>
    </div>
  </main>
  <footer>© <?= date('Y') ?> FocusLearn</footer>
</body>
</html>
