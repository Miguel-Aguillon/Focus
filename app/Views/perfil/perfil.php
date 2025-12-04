<?php
$progress = isset($nivel) && is_numeric($nivel) ? min(100, max(0, ($nivel - 1) * 10)) : 0;
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Mi Perfil - FocusLearn</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <style>
    * { box-sizing: border-box; margin: 0; padding: 0; }
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

    nav {
      display: flex;
      gap: 20px;
      align-items: center;
    }

    nav a {
      color: #000;
      font-weight: 600;
      text-decoration: none;
      transition: 0.3s;
    }

    nav a:hover {
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
      margin-bottom: 20px;
      text-align: center;
      color: #000;
    }

    .profile-card {
      background: rgba(255, 255, 255, 0.9);
      border-radius: 25px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
      padding: 40px;
      width: 90%;
      max-width: 900px;
      text-align: center;
      transition: 0.3s;
    }

    .avatar {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      background: #A7C7E7;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 50px;
      margin: 0 auto 15px;
      color: #000;
    }

    .user-info h2 {
      font-size: 26px;
      font-weight: 700;
      margin-bottom: 5px;
    }

    .user-info p {
      color: #333;
      font-size: 15px;
      margin-bottom: 5px;
    }

    .stats {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 25px;
      margin-top: 40px;
    }

    .stat-card {
      background: rgba(255, 255, 255, 0.8);
      border-radius: 20px;
      box-shadow: 0 6px 15px rgba(0,0,0,0.1);
      padding: 25px;
      transition: 0.3s ease;
    }

    .stat-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(0,0,0,0.2);
    }

    .stat-card h3 {
      color: #000;
      font-size: 20px;
      margin-bottom: 10px;
    }

    .progress-bar {
      background: #ddd;
      border-radius: 10px;
      height: 12px;
      overflow: hidden;
    }

    .progress {
      background: #007bff;
      height: 12px;
      width: 0%;
      transition: width 0.5s ease;
    }

    .logros {
      margin-top: 40px;
      background: rgba(255, 255, 255, 0.8);
      border-radius: 20px;
      padding: 25px;
      box-shadow: 0 6px 15px rgba(0,0,0,0.1);
    }

    .logros h3 {
      color: #000;
      font-size: 22px;
      margin-bottom: 15px;
    }

    .logros ul {
      list-style: none;
      padding: 0;
    }

    .logros li {
      padding: 10px 0;
      border-bottom: 1px solid #ddd;
      font-size: 16px;
    }

    .logros li:last-child {
      border-bottom: none;
    }

    .start-btn-container {
      margin-top: 40px;
      text-align: center;
    }

    .start-btn {
      background: #007bff;
      color: #fff;
      padding: 15px 35px;
      font-size: 20px;
      font-weight: bold;
      text-decoration: none;
      border-radius: 12px;
      box-shadow: 0 6px 15px rgba(0,0,0,0.2);
      transition: 0.3s ease;
      display: inline-block;
    }

    .start-btn:hover {
      background: #0056b3;
      transform: translateY(-3px);
    }

    footer {
      text-align: center;
      padding: 15px 0;
      font-size: 14px;
      color: #333;
      background: rgba(255,255,255,0.7);
      border-top: 1px solid #ccc;
    }
  </style>
</head>

<body>

  <header>
    <h2>FocusLearn</h2>
    <nav>
      <a href="<?= base_url('/') ?>"><i class="fa-solid fa-house"></i> Inicio</a>

      <?php if (isset($rol) && $rol === 'admin'): ?>
        <a href="<?= base_url('admin') ?>"><i class="fa-solid fa-gauge-high"></i> Panel Admin</a>
      <?php endif; ?>

      <a href="<?= base_url('logout') ?>"><i class="fa-solid fa-right-from-bracket"></i> Cerrar sesión</a>
    </nav>
  </header>

  <main>
    <h1>Mi Perfil</h1>

    <div class="profile-card">
      <div class="avatar">👤</div>
      <div class="user-info">
        <h2><?= esc($usuario['nombre']) ?></h2>
        <p><strong>Email:</strong> <?= esc($usuario['correo']) ?></p>
        <p><strong>Nivel:</strong> <?= $nivel ?></p>
      </div>

      <div class="stats">
        <div class="stat-card">
          <h3>XP Total</h3>
          <p><?= $xp_total ?> ⭐</p>
        </div>

        <div class="stat-card">
          <h3>Racha</h3>
          <p><?= $racha ?> 🔥 días</p>
        </div>

        <div class="progress-bar">
          <div class="progress" style="width: <?= esc($progress) ?>%;"></div>
        </div>

        <p>Nivel <?= $nivel ?></p>
      </div>
    </div>

    <div class="start-btn-container">
      <a href="<?= base_url('categorias') ?>" class="start-btn">¡Empieza ya!</a>
    </div>

    <div class="logros">
      <h3>🏆 Logros Desbloqueados</h3>
      <?php if (!empty($logros)): ?>
        <ul>
          <?php foreach ($logros as $l): ?>
            <li><?= esc($l) ?></li>
          <?php endforeach; ?>
        </ul>
      <?php else: ?>
        <p>Aún no tienes logros. ¡Sigue aprendiendo! 🚀</p>
      <?php endif; ?>
    </div>
  </main>

  <footer>
    © <?= date('Y') ?> FocusLearn. Todos los derechos reservados.
  </footer>

</body>
</html>
