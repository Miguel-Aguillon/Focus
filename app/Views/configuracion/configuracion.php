<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Configuración - FocusLearn</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #ffffff, #A7C7E7);
      color: #000;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
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
      transition: 0.3s;
    }

    header a:hover {
      color: #007bff;
    }

    main {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: flex-start;
      padding: 50px 20px;
    }

    .config-box {
      width: 100%;
      max-width: 700px;
      background: rgba(255,255,255,0.85);
      border-radius: 20px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.15);
      padding: 40px 35px;
      animation: fadeIn 1s ease;
      backdrop-filter: blur(10px);
    }

    @keyframes fadeIn {
      from {opacity: 0; transform: translateY(20px);}
      to {opacity: 1; transform: translateY(0);}
    }

    h1 {
      text-align: center;
      font-size: 30px;
      font-weight: 700;
      margin-bottom: 25px;
    }

    .section {
      background: #E8F0FE;
      padding: 20px;
      border-radius: 15px;
      margin-bottom: 25px;
      transition: 0.3s;
    }

    .section:hover {
      background: #dce7fc;
    }

    .section h3 {
      margin-bottom: 15px;
      font-size: 20px;
      color: #000;
      display: flex;
      align-items: center;
      gap: 8px;
    }

    label {
      display: block;
      margin-bottom: 10px;
      font-size: 15px;
    }

    select {
      width: 100%;
      padding: 10px;
      border-radius: 10px;
      border: 2px solid transparent;
      font-size: 15px;
      background: #fff;
      transition: 0.3s;
    }

    select:focus {
      border-color: #007bff;
      outline: none;
      box-shadow: 0 0 6px rgba(0,123,255,0.4);
    }

    input[type="checkbox"] {
      transform: scale(1.3);
      margin-right: 10px;
      accent-color: #000;
      cursor: pointer;
    }

    button {
      width: 100%;
      padding: 12px;
      background: #000;
      color: #fff;
      border-radius: 10px;
      font-size: 16px;
      font-weight: 600;
      border: none;
      cursor: pointer;
      transition: 0.3s;
      margin-top: 10px;
    }

    button:hover {
      background: #333;
      transform: scale(1.03);
    }

    footer {
      text-align: center;
      padding: 15px 0;
      font-size: 14px;
      color: #333;
      background: rgba(255,255,255,0.7);
      border-top: 1px solid #ccc;
    }

    /* Feedback visual al guardar */
    .alerta {
      display: none;
      margin-top: 15px;
      padding: 10px;
      border-radius: 10px;
      background: #D4EDDA;
      color: #155724;
      font-weight: 600;
      text-align: center;
      border: 1px solid #C3E6CB;
      animation: fadeIn 0.6s ease;
    }

    .alerta.mostrar {
      display: block;
    }
  </style>
</head>

<body>

  <header>
    <h2>FocusLearn</h2>
    <a href="<?= base_url('/') ?>"><i class="fa-solid fa-house"></i> Inicio</a>
  </header>

  <main>
    <div class="config-box">
      <h1>Configuración</h1>

      <!-- Idioma -->
      <div class="section">
        <h3><i class="fa-solid fa-language"></i> Idioma</h3>
        <label for="idioma">Seleccionar idioma:</label>
        <select id="idioma">
          <option>Español</option>
          <option>Inglés</option>
          <option>Portugués</option>
        </select>
      </div>

      <!-- Notificaciones -->
      <div class="section">
        <h3><i class="fa-solid fa-bell"></i> Notificaciones</h3>
        <label><input type="checkbox" checked> Recibir recordatorios de estudio</label>
        <label><input type="checkbox"> Notificaciones de nuevos retos</label>
        <label><input type="checkbox"> Avisos de logros desbloqueados</label>
      </div>

      <!-- Apariencia -->
      <div class="section">
        <h3><i class="fa-solid fa-paintbrush"></i> Apariencia</h3>
        <label><input type="checkbox" id="modoOscuro"> Activar modo oscuro</label>
        <label><input type="checkbox" checked> Animaciones activadas</label>
      </div>

      <button id="guardar">Guardar Cambios</button>

      <div class="alerta" id="mensajeGuardado">
        <i class="fa-solid fa-check-circle"></i> Cambios guardados correctamente
      </div>
    </div>
  </main>

  <footer>
    © <?= date('Y') ?> FocusLearn. Todos los derechos reservados.
  </footer>

  <script>
    // Efecto visual al guardar
    const botonGuardar = document.getElementById('guardar');
    const mensaje = document.getElementById('mensajeGuardado');
    const modoOscuro = document.getElementById('modoOscuro');

    botonGuardar.addEventListener('click', () => {
      mensaje.classList.add('mostrar');
      setTimeout(() => mensaje.classList.remove('mostrar'), 3000);
    });

    // Activar modo oscuro
    modoOscuro.addEventListener('change', () => {
      if (modoOscuro.checked) {
        document.body.style.background = '#111';
        document.body.style.color = '#fff';
      } else {
        document.body.style.background = 'linear-gradient(135deg, #ffffff, #A7C7E7)';
        document.body.style.color = '#000';
      }
    });
  </script>

</body>
</html>

